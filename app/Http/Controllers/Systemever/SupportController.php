<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupportController extends Controller
{
    public function support_guide()
    {
        $data['breadcrumbs'] = [
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('Support', 'Dukungan'),
                'link'=>'#'
            ], 
            [
                'label'=> stringlang('Support Guide', 'Panduan'),
                'link'=>'#'
            ]
        ];
        $lang = activelang();
        $support = \App\Post::where([
            ["tipe", "support-guide"],
            ["lang", $lang]
        ])->first();
        $data['data'] = json_decode($support->body);
        // dd($data);
        return view('systemever/pages/support/support_guide',$data);
    }
    public function user_manual()
    {
        $data['breadcrumbs'] = [
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('Support', 'Dukungan'),
                'link'=>'#'
            ], 
            [
                'label'=> stringlang('User Manual', 'Panduan User'),
                'link'=>'#'
            ]
        ];

        $lang = activelang();
        $manual = \App\Post::where([
            ["tipe", "user manual"],
            ["lang", $lang]
        ])->get();

        $data['data'] = $manual;
        return view('systemever/pages/support/user_manual',$data);
    }
}
