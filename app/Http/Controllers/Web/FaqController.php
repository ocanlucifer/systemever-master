<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        $data['breadcrumbs'] = array(
            [ 
                'label' => 'Home',
                'link'  => route("get.home")
            ],
            [ 
                'label' => 'FAQ',
                'link'  => route("get.faq")
            ], 
        );

        $faq = \App\Faq::where([
            ["lang", activelang()],
        ])->orderBy("created_at", "DESC")->get();

        $data['seo'] = seohelper("PAGE", "FAQ");

        $data['faq'] = [];
        foreach ($faq as $v) {
            $data['faq'][$v->categories][] = $v;
        }        

        return view("web/faq", $data);
    }
}
