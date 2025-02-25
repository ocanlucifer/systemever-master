<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function support(){
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
                'label'=> stringlang('FAQ', 'Tanya Jawab'),
                'link'=> route('get.pages.support.support')
            ], 
        );
        $lang = activelang();
        $param = [];
        $param[] = ["lang", $lang];
        if (get('q')) {
            $param[] = ['question', 'like', '%'.get('q').'%'];
        }
        $faq = \App\Faq::where($param)->get();
        if (get('q')) {
            $data['faq'] = $faq;
        } else {
            $data['faq'] = group_array($faq, 'categories');
        }
        $data['faq_category'] = \App\FaqCategories::where("lang", $lang)->get();
        // dd($data);
        if (get('q')) {
            return view('systemever/pages/support/support-search',$data);
        } else {
            return view('systemever/pages/support/support',$data);
        }
    }
}
