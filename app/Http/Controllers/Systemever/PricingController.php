<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function accounting_tax(){
        $data['breadcrumbs'] = array(
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('Support', 'Dukungan'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('Accounting & Tax Services', 'Layanan Akuntansi & Konsultasi Pajak'),
                'link'=>'#'
            ], 
        );
        $lang = activelang();
        $post = \App\Post::where([
            ["slug", "pricing"],
            ["tipe", "pages"],
        ])->first();
        if ($lang != $post->lang) {
            $child = \App\Post::where("parent_id", $post->id)->first();
            if (!empty($child)) {
                $post = $child;
            }
        }

        // dd($post);
        $data['data'] = json_decode($post->json_meta);
        // $data["data"] = json_decode($about->json_content);
        // dd($data['data']);        
        return view('systemever/pages/pricing/accounting_tax',$data);
    }

    public function integrated_erp(){
        $data['breadcrumbs'] = array(
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('Support', 'Dukungan'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('Integrated ERP', 'ERP Terintegrasi'),
                'link'=>'#'
            ], 
        );
        $lang = activelang();
        $post = \App\Post::where([
            ["tipe", "pricing"],
            ["lang" , $lang]
        ])->first();
        $data['data'] = json_decode($post->body);
        // dd($data);        
        return view('systemever/pages/pricing/integrated_erp',$data);
    }
}
