<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function service_feature()
    {
        $lang = activelang();
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.get.pages.services.feature');
            } else {
                $view = \Cache::pull('id.get.pages.services.feature');
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
                'label'=> stringlang('Service', 'Layanan'),
                'link'=> '#'
            ], 
            [ 
                'label'=> stringlang('SystemEver Feature', 'Fitur SystemEver'),
                'link'=> route('get.pages.services.feature')
            ], 
        );

        $service = \App\Service::where([
            ["lang", $lang],
            ["type", "systemever-feature"]
        ])->first();
        $data['data'] = json_decode($service->json_content);
        // dd($data);
        $view = view('systemever/pages/services/feature',$data);
        if (env('APP_ENV') == "production") {
            if (activelang() == "EN") {
                \Cache::put('en.get.pages.services.feature', $view);
            } else {
                \Cache::put('id.get.pages.services.feature', $view);
            }
        }
        return $view;
    }

    public function service_quality_security()
    {
        $lang = activelang();
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.get.pages.services.quality_security');
            } else {
                $view = \Cache::pull('id.get.pages.services.quality_security');
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
                'label'=> stringlang('Support', 'Pendukung'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('Quality/Security', 'Kualitas/Keamanan'),
                'link'=>'#'
            ], 
        );
        
        $service = \App\Service::where([
            ["lang", $lang],
            ["type", "quality-security"]
        ])->first();
        $data['data'] = json_decode($service->json_content);
        // dd($data);
        $view = view('systemever/pages/services/quality_security',$data);
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                \Cache::put('en.get.pages.services.quality_security', $view);
            } else {
                \Cache::put('id.get.pages.services.quality_security', $view);
            }
        }
        return $view;
    }
    
    public function customer_industry(){
        $lang = activelang();
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                $view = \Cache::pull('en.get.pages.services.customer_industry');
            } else {
                $view = \Cache::pull('id.get.pages.services.customer_industry');
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
                'label'=> stringlang('Service', 'Layanan'),
                'link'=>'#'
            ], 
            [ 
                'label'=> stringlang('Customer Industry', 'Pelanggan & Industri'),
                'link'=>'#'
            ], 
        );
        
        $service = \App\Service::where([
            ["lang", $lang],
            ["type", "customer-industry"]
        ])->first();
        $data['testimony'] = \App\testimony::where([
            ["lang", $lang],
        ])->get();
        $data['customer_logo'] = \App\CustomerLogos::get();
        $data['data'] = json_decode($service->json_content);
        // dd($data['data']);
        $view = view('systemever/pages/services/customer_industry',$data);
        if (env('APP_ENV') == "production") {
            if ($lang == "EN") {
                \Cache::put('en.get.pages.services.customer_industry', $view);
            } else {
                \Cache::put('id.get.pages.services.customer_industry', $view);
            }
        }
        return $view;
    }
}
