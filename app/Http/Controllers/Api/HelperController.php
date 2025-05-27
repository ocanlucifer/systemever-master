<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use CRUDBooster;
use App\Http\Controllers\Controller;
use Validator;

class HelperController extends Controller
{
    public function optionHelper()
    {
        $data = \DB::table(get('table'))
            ->selectRaw(get('select'))
            ->where(get('fk_name'), get('fk_value'))
            ->whereRaw(get('datatable_where'))
            ->get()
            ->toArray();

        return response()->json($data);
    }

    public function uploadHelper(Request $request)
    {
        $path = $request->file->store('uploads/' . date("Y-m"));
        $media = new \App\Medias;
        $media->url = asset($path);
        $media->updated_by = CRUDBooster::myId();
        $media->save();

        return response()->json([
            'media_url' => ($media->url),
            'media_blob' => url_to_svg($media->url),
            'media_id' => $media->id
        ]);
    }

    public function multiUploadHelper(Request $request)
    {
        // dd($request->file);
        // $path = $request->file->store('uploads/' . date("Y-m"));
        // dd($path);
        $media_url = [];
        foreach ($request->file as $f) {
            $path = $f->store('uploads/' . date("Y-m"));
            $media = new \App\Medias;
            $media->url = asset($path);
            $media->updated_by = CRUDBooster::myId();
            $media->save();
            $media_url[] = url_to_svg(asset($path));
        }

        return response()->json([
            'media_url'     => $media_url,
        ]);
    }

    public function earlyBird(Request $request)
    {
        if (!empty($request->deadline_pembayaran)
            && !empty($request->booth_size)
            && !empty($request->partisipation_type)
        ) {
            $payment = strtotime($request->deadline_pembayaran);
            $max = strtotime("2021-03-12");
            $today = strtotime(date("Y-m-d"));

            if ($payment > $max) {
                return response()->json([
                    'status'    => 'error',
                    'message'   => "Tanggal Pelunasan tdk boleh lebih dari 12 Maret 2021"
                ]);
            } else if ($payment < $today) {
                return response()->json([
                    'status'    => 'error',
                    'message'   => "Tanggal pelunasan sudah lewat"
                ]);
            } else {
                $cost = \App\CreateEarlyBirdPrice::where([
                    ['max_pay_date', ">=", $request->deadline_pembayaran],
                    ['ukuran_stan', $request->booth_size],
                    ['package_type', $request->partisipation_type]
                ])->orderBy('max_pay_date', 'asc')->first();

                $cost->harga_f = nominal($cost->harga);

                return response()->json([
                    'status'    => 'success',
                    'data'      => $cost
                ]);
            }
        }
    }

    public function langid()
    {
        session(['lang' => 'ID']);
        echo \Session::get("lang");
    }

    public function langen()
    {
        session(['lang' => 'EN']);
        echo \Session::get("lang");
    }

    public function langkor()
    {
        session(['lang' => 'KOR']);
        echo \Session::get("lang");
    }

    public function survey(Request $request)
    {
        $post = $request->all();
        $rules = [
            "ref_mitras_id"             => 'required',
            "cms_users_id"              => 'required',
            "ref_survey_questions_id"   => 'required',
            "ref_survey_answers_id"     => 'required',
            "answer_value"              => 'required',
            "answer_type"               => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $error = $validator->errors();

            return response()->json([
                'code' => 200,
                'message' => 'error',
                'data' => $error
            ]);
        }

        //create survey header
        $header = \App\RefSurveiHeaders::where([
            ['ref_mitras_id', $post['ref_mitras_id']],
            ['cms_users_id', $post['cms_users_id']],
        ])->first();
        if (empty($header)) {
            $header = new \App\RefSurveiHeaders;
            $header->ref_mitras_id = $post['ref_mitras_id'];
            $header->cms_users_id = $post['cms_users_id'];
        }
        $header->surfey_status = "on progress";
        $header->save();

        $ref_surfeys_id = $header->id;

        //create survei detail
        $detail = \App\RefSurveiDetails::where([
            ['ref_surfeys_id', $ref_surfeys_id],
            ['ref_mitras_id', $post['ref_mitras_id']],
            ['cms_users_id', $post['cms_users_id']],
            ['ref_survey_questions_id', $post['ref_survey_questions_id']],
            ['ref_survey_answers_id', $post['ref_survey_answers_id']],
        ])->first();
        if (empty($detail)) {
            $detail = new \App\RefSurveiDetails;
            $detail->ref_surfeys_id = $ref_surfeys_id;
            $detail->ref_mitras_id = $post['ref_mitras_id'];
            $detail->cms_users_id = $post['cms_users_id'];
            $detail->ref_survey_questions_id = $post['ref_survey_questions_id'];
            $detail->ref_survey_answers_id = $post['ref_survey_answers_id'];

        }
        $detail->answer_value = $post['answer_value'];
        $detail->answer_type = $post['answer_type'];
        $detail->save();

        //response
        return response()->json([
            'code' => '200',
            'message' => 'success',
            'data' => $detail
        ]);

    }

    public function pagesetting(Request $request)
    {
        $post = $request->all();
        $setting = \App\Settings::where([
            ["key", $request->post_id],
            ["setting_type", "custom_page_setting"]
        ])->first();
        $json = json_decode($setting->value, true);

        if (empty($setting)) {
            $setting = new \App\Settings;
            $setting->key = $request->post_id;
            $setting->setting_type = "custom_page_setting";
            $setting->value = "[]";
            $json = [];
        }

        $table_setting = null;
        if ($post['input_type'] == "table") {
            $header = [];
            foreach ($request['table_setting'] as $v) {
                $header[$v["name"]] = [
                    "type"  => $v["options"],
                    "label" => $v["label"],
                    "query" => $v["query"],
                    "data"  => $v["data"],
                ];
            }
            $table_setting = [
                "label" => $request->label,
                "name" => $request->name,
                "header" => $header,
            ];
        }

        $json[] = [
            "input_type"    => $request->input_type,
            "name"          => $request->name,
            "label"         => $request->label,
            "data"          => json_encode($table_setting),
        ];

        // print_r($json); exit();
        $setting->value = json_encode($json);
        $setting->save();

        return response()->json([
            'code' => '200',
            'message' => 'success',
            'data' => $json
        ]);
    }

    public function pagesettingdelete(Request $request)
    {
        $setting = \App\Settings::where([
            ["key", $request->post_id],
            ["setting_type", "custom_page_setting"]
        ])->first();
        $json = json_decode($setting->value, true);

        foreach ($json as $k => $v) {
            if ($k == $request->key) {
                unset($json[$k]);
            }
        }
        $setting->value = json_encode($json);
        $setting->save();

        return response()->json([
            'code' => '200',
            'message' => 'success',
            'data' => $json
        ]);
    }

    public function newsletter(Request $request)
    {
        $rules = [
            "email" => 'required|email',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $error = $validator->errors();
            return response()->json([
                'code' => 201,
                'message' => 'Please insert the correct email format',
                'data' => $error
            ]);
        }

        $newsletter_member = \App\NewsletterMembers::where("email", $request->email)->first();
        if (!empty($newsletter_member)) {
            return response()->json([
                'code' => 201,
                'message' => 'Email is already registered',
            ]);
        } else {
            $newsletter_member = new \App\NewsletterMembers;
            $newsletter_member->email = $request->email;
            $newsletter_member->save();

            return response()->json([
                'code' => 200,
                'message' => 'Success',
                'data' => $newsletter_member
            ]);
        }
    }
}
