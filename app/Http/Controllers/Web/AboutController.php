<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $banner = \App\Settings::where("setting_type", "about_us_banner")->first();

        $product_journey = \App\ProductJourney::where("lang", activelang())->get();

        $flavour_bakpia = \App\FlavorsVarian::where([
            ["type", "BAKPIA"],
        ])->get()->map(function($row){
            if (activelang() == "ID") {
                $row->product = \App\Product::find($row->product_id);
            } else {
                $row->product = \App\Product::find($row->product_en);
            }
            return $row;
        });
        $flavour_bolu = \App\FlavorsVarian::where([
            ["type", "BOLU KUKUS"],
        ])->get()->map(function($row){
            if (activelang() == "ID") {
                $row->product = \App\Product::find($row->product_id);
            } else {
                $row->product = \App\Product::find($row->product_en);
            }
            return $row;
        });

        $seo = seohelper("PAGE", "ABOUT");

        $data = [
            "banner"            => $banner,
            "product_journey"   => $product_journey,
            "flavour_bakpia"    => $flavour_bakpia,
            "flavour_bolu"      => $flavour_bolu,
            "seo"               => $seo,
            "url"               => route("get.about")
        ];

        return view("web/about", $data);
    }
}
