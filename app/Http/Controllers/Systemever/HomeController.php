<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class HomeController extends Controller
{
    public function index(){
        $lang = activelang();

        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.home.index');
            } else {
                $view = \Cache::pull('id.home.index');
            }
            if (!empty($view)) {
                return $view;
            }
        }

        //get page post data
        $post = \App\Post::where([
            ["slug", "home"]
        ])->first();

        //if difrent language apply search for other child language
        if ($post->lang != $lang) {
            $newpost = \App\Post::where([
                ["lang", $lang],
                ["parent_id", $post->id]
            ])->first();

            if (!empty($newpost)) {
                $post = $newpost;
            }
        }


        $json = json_decode($post->json_meta);

        $data['meta'] = $json;

        // $data['testimony'] = \App\testimony::where([
        //     ["lang", $lang],
        // ])->get();

        $data['award'] = \App\awards::where([
            ["lang", $lang],
        ])->get();

        // $data['country'] = \App\countrybranch::get();

        // $data['customer_logo'] = \App\CustomerLogos::get();

        $today = date("Y-m-d");
        $data['notice'] = \App\Notice::where("date_start", "<=", $today)
            ->where("date_end", ">=", $today)
            ->where("lang", activelang())
            ->first();

        if (!empty($data['notice'])) {
            $data['notice']->views = $data['notice']->views + 1;
            $data['notice']->save();
        }

        // dd($data);
        
        
        $view = view('systemever/index', $data)->render();
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                \Cache::put('en.home.index', $view, 30);
            } else {
                \Cache::put('id.home.index', $view, 30);
            }
        }

        return $view;
    }

    public function form(Request $request)
    {
        $post = $request->all();
        // dd($post);
        $rules = [
            "nama"          => 'required',
            "email"         => 'required|email',
            'g-recaptcha-response'=>'required'
        ];

        if ($post->type == "download") {
            $rules["phone"] = 'required|numeric';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            // \Session::flash('modalerror', $validator->errors());
            // return redirect()->back()->withInput();
            $error = $validator->errors();

            return response()->json([
                'code' => 200,
                'message' => 'error',
                'data' => $error
            ]);
        }

        //save inquiries
        $inquiries = new \App\Inquiries;
        $inquiries->name = $request->nama;
        $inquiries->title = $request->title;
        $inquiries->phone = $request->phone;
        $inquiries->email = $request->email;
        $inquiries->company = $request->company;
        $inquiries->is_experienced_erp = $request->{"radio-erp"};
        $inquiries->from = $request->from;
        $inquiries->type = $request->type;
        $inquiries->message = $request->message;
        $inquiries->save();

        // dd($request->all());

        if ($request->type == "download") {
            //sendemail
            $download = uri('assets/doc/BrochureSystemEver.pdf');
            if (!empty($request->lang)) {
                $setting_download = \App\Settings::where([
                    ["setting_type", "download_form"],
                    ["key", $request->lang]
                ])->first();
                if (!empty($setting_download)) {
                    $download = asset($setting_download->value);
                }   
            }

            if ($request->lang != 'ID') {
                $param = [
                    "email"     => $request->email,
                    "name"      => $request->nama,
                    "message"   => "Hello ".$request->nama."<br>
                    <br>
                    Thankyou for visiting our website.<br>
                    Please click the button bellow to download our product information.<br><br>
                    <a href='$download' style='color:#000;padding:10px 20px; background-color:#92d050;'><b>Download</b></a><br><br>
                    We understand your need for the latest technology, so that your work is effective and efficient.<br>
                    Our team will contact you soon!<br>
                    <br>
                    Thankyour<br>
                    #SystemEverID
                    ",
                ];
            } else {
                $param = [
                    "email"     => $request->email,
                    "name"      => $request->nama,
                    "message"   => "Hello ".$request->nama."<br>
                    <br>
                    Terima kasih telah mengunjungi website kami.<br>
                    Silahkan klik tautan berikut untuk mengunduh informasi mengenai produk kami.<br><br>
                    <a href='$download' style='color:#000;padding:10px 20px; background-color:#92d050;'><b>Download</b></a><br><br>
                    Kami memahami kebutuhan Anda mengenai teknologi terkini, agar pekerjaan Anda efektif dan efisien.<br>
                    Tim Kami akan segera menghubungi Anda!<br>
                    <br>
                    Thankyour<br>
                    #SystemEverID
                    ",
                ];
            }
        

            // return view('emails.general', ['param' => $param]);
            \App\Service\MailService::contact($param);

        } else {
            //sendemail
            \App\Service\MailService::contact([
                "email"     => $request->email,
                "name"      => $request->nama,
                "message"   => "Dear ".$request->nama."<br>
                <br>
                Teknologi SaaS saat ini sudah menjadi bagian penting dalam keseharian pekerjaan kita. 
                Salah satunya adalah Sistem Cloud ERP yang memungkinkan kita untuk bekerja dimana saja 
                dan kapan saja selama terkoneksi dengan internet.<br>
                <br>
                Kami memahami kebutuhan Anda akan teknologi terkini yang dapat membantu pekerjaan Anda lebih efektif dan efisien. Anda dapat mengunduh informasi produk <a href='$download'>SystemEver</a><br>
                <br>
                Segera kami akan menghubungi Anda! <br>
                <br>
                Thankyou<br>
                #SystemEverID
                ",
            ]);

            // \App\Service\MailService::contact([
            //     "email"     => $request->email,
            //     "name"      => $request->nama,
            //     "message"   => "Dear ".$request->nama."<br>
            //     <br>
            //     SaaS technology has now become an important part of our daily work. One of them
            //     is a Cloud ERP System that allows us to work anywhere and anytime as long as
            //     connected to the internet.<br>
            //     <br>
            //     We understand your need for the latest technology that can help your work more
            //     effective and efficient. You can download <a href='$download'>SystemEver</a> product information<br>
            //     <br>
            //     We will contact you soon<br>
            //     <br>
            //     Thankyou<br>
            //     #SystemEverID
            //     ",
            // ]);

            \App\Service\MailService::contact([
                "email"     => "info@systemever.com",
                "name"      => "Systemever",
                "message"   => "Dear Systemever Admin<br>
                <br>
                Your customer ".$request->nama."(".$request->email."), is try to reaching you.
                Please answer no later than 24 hours from now.<br>
                <br>
                Customer message : <br>
                ".$request->message."<br>
                <br>
                Regards<br>
                Systemever Mailing System
                ",
            ]);
        }        
         
        // \Session::flash('success', "success");
        // \Session::flash('modalsuccess', "success");
        // return redirect()->back();

        return response()->json([
            'code' => 200,
            'message' => 'success'
        ]);
    }
}
