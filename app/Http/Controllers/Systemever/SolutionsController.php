<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolutionsController extends Controller
{
    public function index()
    {
        $data['lang_option'] = \App\Settings::where([
            ["setting_type", "download_form"]
        ])->get();

        $data['langlist'] = [
            'ID' => "Indonesia",
            'EN' => "English",
            'KR' => "한국어",
        ];

        //get page post data
        $post = \App\Post::where([
            ["slug", "solution_accountax"]
        ])->first();

        //if difrent language apply search for other child language
        $lang = activelang();
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

        $data['data'] = $json;
        // dd($data['data']);

        return view('systemever/pages/solutions/index', $data);
    }
    public function bms()
    {
        $data['lang_option'] = \App\Settings::where([
            ["setting_type", "download_form"]
        ])->get();

        //get page post data
        $post = \App\Post::where([
            ["slug", "solution_bms"]
        ])->first();

        //if difrent language apply search for other child language
        
        $lang = activelang();
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

        $data['langlist'] = [
            'ID' => "Indonesia",
            'EN' => "English",
            'KR' => "한국어",
        ];
        return view('systemever/pages/solutions/bms', $data);
    }
    public function accounting_management_systems()
    {    
        $lang = activelang();
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.get.pages.solutions.accounting_management_systems');
            } else {
                $view = \Cache::pull('id.get.pages.solutions.accounting_management_systems');
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
                'label'=> stringlang('Solution', 'Solusi'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('Accounting & Tax Service', 'Layanan Akuntansi & Pajak'),
                'link'=> route('get.pages.solutions.accounting_management_systems')
            ],
        );
        
        $product = \App\Product::where([
            ["main_type", "i1"],
            ["lang", $lang]
        ])->first();

        $data["data"] = $product;
        $data["basic_plan"] = \App\BasicPlans::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
            ["type", "basic"]
        ])->get();
        $data["basic_banner"] = \App\BasicPlans::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
            ["type", "banner"]
        ])->get();

        $data['accounting'] = $page = \App\Post::where([
            ["slug", "solution_accountax"],
            // ["lang", $lang]
        ])->first();
        if ($lang == 'EN') {
            //search child
            $data['accounting'] = \App\Post::where([
                ["parent_id", $page->id],
            ])->first();
        }
        // dd($data['accounting']);
        $data['meta'] = json_decode($data['accounting']->json_meta);

        $data['lang_option'] = \App\Settings::where([
            ["setting_type", "download_form"]
        ])->get();

        $data['langlist'] = [
            'ID' => "Indonesia",
            'EN' => "English",
            'KR' => "한국어",
        ];

        $view = view('systemever/pages/solutions/accounting_management_systems',$data);
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                \Cache::put('en.get.pages.solutions.accounting_management_systems', $view);
            } else {
                \Cache::put('id.get.pages.solutions.accounting_management_systems', $view);
            }
        }
        return $view;
    }

    public function i5_trading()
    {
        $lang = activelang();
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.get.pages.solutions.i5_trading');
            } else {
                $view = \Cache::pull('id.get.pages.solutions.i5_trading');
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
                'label'=> stringlang('Solution', 'Solusi'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('Sales / Inventory / Consigning', 'Penjualan / Gudang / Konsinyasi'),
                'link'=>'#'
            ],
            
        );

        $product = \App\Product::where([
            ["main_type", "i5"],
            ["lang", $lang]
        ])->first();
        $data["data"] = $product;
        $data["basic_plan"] = \App\BasicPlans::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
            ["type", "basic"]
        ])->get();
        $data["basic_banner"] = \App\BasicPlans::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
            ["type", "banner"]
        ])->get();
        $data["integrated"] = \App\IntegratedModules::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
        ])->get();
        $data["bussines"] = \App\BusinessIcon::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
        ])->get();
        $data['accounting'] = $page = \App\Post::where([
            ["slug", "solution-i5"],
            // ["lang", $lang]
        ])->first();
        if ($lang == 'EN') {
            //search child
            $data['accounting'] = \App\Post::where([
                ["parent_id", $page->id],
            ])->first();
        }
        $data['meta'] = json_decode($data['accounting']->json_meta);
    
        $view = view('systemever/pages/solutions/i5_trading',$data);
        if (env('APP_ENV') == "production") {
            if (activelang() == "EN") {
                \Cache::put('en.get.pages.solutions.i5_trading', $view);
            } else {
                \Cache::put('id.get.pages.solutions.i5_trading', $view);
            }
        }
        return $view;
    }

    public function i7_manufacture()
    {
        $lang = activelang();
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.get.pages.solutions.i7_manufacture');
            } else {
                $view = \Cache::pull('id.get.pages.solutions.i7_manufacture');
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
                'label'=> stringlang('Solution', 'Solusi'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('Integrated Manufacturing', 'Manufaktur Terintegrasi'),
                'link'=>'#'
            ],
        );


        $product = \App\Product::where([
            ["main_type", "i7"],
            ["lang", $lang]
        ])->first();
        $data["data"] = $product;
        $data["basic_plan"] = \App\BasicPlans::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
            ["type", "basic"],
            ["status", "Publish"]
        ])->get();
        $data["basic_banner"] = \App\BasicPlans::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
            ["type", "banner"],
            ["status", "Publish"]
        ])->get();
        $data["integrated"] = \App\IntegratedModules::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
        ])->get();
        $data["bussines"] = \App\BusinessIcon::where([
            ["lang", $lang],
            ["products_id", $data['data']->id],
        ])->get();

        $data['accounting'] = $page = \App\Post::where([
            ["slug", "solution-i7"],
            // ["lang", $lang]
        ])->first();
        if ($lang == 'EN') {
            //search child
            $data['accounting'] = \App\Post::where([
                ["parent_id", $page->id],
            ])->first();
        }
        $data['meta'] = json_decode($data['accounting']->json_meta);
    
        $view = view('systemever/pages/solutions/i7_manufacture',$data);
        if (env('APP_ENV') == "production") {
            if (activelang() == "EN") {
                \Cache::put('en.get.pages.solutions.i7_manufacture', $view);
            } else {
                \Cache::put('id.get.pages.solutions.i7_manufacture', $view);
            }
        }
        return $view;
    }
    
    public function elearning(){
        
        $lang = activelang();
        $data['page'] = $page = \App\Post::where([
            ["slug", "accountax-elearning"],
        ])->first();
        if ($lang == 'EN') {
            $data['page'] = \App\Post::where([
                ["parent_id", $page->id],
            ])->first();
        }
        $data['meta'] = json_decode($data['page']->json_meta);
        return view('systemever/pages/elearning',$data);
    }
    public function performance(){
        
        $lang = activelang();
        $data['page'] = $page = \App\Post::where([
            ["slug", "performance-quality"],
        ])->first();
        if ($lang == 'EN') {
            $data['page'] = \App\Post::where([
                ["parent_id", $page->id],
            ])->first();
        }
        $data['meta'] = json_decode($data['page']->json_meta);
        return view('systemever/pages/performance',$data);
    }

}
