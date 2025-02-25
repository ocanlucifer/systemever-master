<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function indonesia_branch(){
        $lang = activelang();

        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.about.indonesia_branch');
            } else {
                $view = \Cache::pull('id.about.indonesia_branch');
            }
            if (!empty($view)) {
                return $view;
            }
        }

        $data['breadcrumbs'] = array(
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('About', 'Tentang Kami'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('Indonesia Branch', 'Kantor Cabang Indonesia'),
                'link'=>'#'
            ], 
        );
        $about = \App\About::where([
            ["title", "indonesia-branch"],
            ["lang", $lang]
        ])->first();
        $data["data"] = json_decode($about->json_content);

        $view = view('systemever/pages/abouts/indonesia_branch',$data);

        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                \Cache::put('en.about.indonesia_branch', $view);
            } else {
                \Cache::put('id.about.indonesia_branch', $view);
            }
        }
        return $view;
    }
    
    public function system_ever(){
        $lang = activelang();

        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.about.system_ever');
            } else {
                $view = \Cache::pull('id.about.system_ever');
            }
            if (!empty($view)) {
                return $view;
            }
        }

        $data['breadcrumbs'] = array(
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('About', 'Tentang Kami'),
                'link'=>'#'
            ], 
            [ 
                'label'=>'SystemEver',
                'link'=> route('get.pages.abouts.system_ever')
            ], 
        );
        
        $about = \App\About::where([
            ["title", "system-ever"],
            ["lang", $lang]
        ])->first();
        $data["data"] = json_decode($about->json_content);
        // dd($data["data"]);

        $data['superiority'] = \App\Superiority::where([
            ["location", "home"],
            ["lang", $lang],
        ])->get();

        $data['testimony'] = \App\testimony::where([
            ["lang", $lang],
        ])->get();  

        $view = view('systemever/pages/abouts/system_ever',$data);
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                \Cache::put('en.about.system_ever', $view);
            } else {
                \Cache::put('id.about.system_ever', $view);
            }
        }
        return $view;
    }

    public function history()
    {

        $lang = activelang();

        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.about.history');
            } else {
                $view = \Cache::pull('id.about.history');
            }
            if (!empty($view)) {
                return $view;
            }
        }        

        $data['breadcrumbs'] = array(
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('About', 'Tentang Kami'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('History', 'Sejarah'),
                'link'=>route('get.pages.abouts.history')
            ], 
        );
        
        $about = \App\About::where([
            ["title", "history"],
            ["lang", $lang]
        ])->first();
        $data["data"] = json_decode($about->json_content);
        $data["history"] = \App\AboutUsHistory::where([
            ["lang", $lang]
        ])->orderBy("year", "desc")->get();        

        $view = view('systemever/pages/abouts/history',$data);
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                \Cache::put('en.about.history', $view);
            } else {
                \Cache::put('id.about.history', $view);
            }
        }
        return $view;
    }
}
