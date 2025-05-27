<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        $lang = activelang();

        $data['ceoforum'] = \App\awards::where([
            ["lang", $lang],
        ])->get();

        $view = view('systemever/pages/landing/index', $data)->render();
        if (env('APP_ENV') == "production") {
            if ($lang == 'EN') {
                \Cache::put('en.home.index', $view, 30);
            } else {
                \Cache::put('id.home.index', $view, 30);
            }
        }

        return $view;
    }
}
