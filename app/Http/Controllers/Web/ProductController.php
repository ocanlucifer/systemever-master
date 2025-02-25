<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            [
                "link" => route("get.home"),
                "label" => "Home",
            ],
            [
                "link" => route("get.product"),
                "label" => "Product",
            ]
        ];

        $bakpia = \App\Product::where([
            ["lang", activelang()],
            ["type", "BAKPIA KUKUS"]
        ])->orderBy("created_at", "DESC")->get();

        $bolu = \App\Product::where([
            ["lang", activelang()],
            ["type", "BOLU KUKUS"]
        ])->orderBy("created_at", "DESC")->get();

        $seo = seohelper("PAGE", "PRODUCT LIST");

        $data = [
            "breadcrumbs"   => $breadcrumbs,
            "bakpia"        => $bakpia,
            "bolu"          => $bolu,
            "seo"           => $seo,
            "url"           => route("get.product")
        ];
        return view("web/product", $data);
    }
}
