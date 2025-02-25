<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return redirect("/frontend");
        // App::setLocale("id");

        $banner = \App\Banner::where([
            ["lang", activelang()],
            ["responsive_type", 'desktop']
        ])->orderBy("created_at", "DESC")->get();

        $banner_mobile = \App\Banner::where([
            ["lang", activelang()],
            ["responsive_type", 'mobile']
        ])->orderBy("created_at", "DESC")->get();

        $bakpia = \App\Product::where([
            ["lang", activelang()],
            ["type", "BAKPIA KUKUS"]
        ])->orderBy("created_at", "DESC")->get();

        $bolu = \App\Product::where([
            ["lang", activelang()],
            ["type", "BOLU KUKUS"]
        ])->orderBy("created_at", "DESC")->get();

        $article = \App\Post::where([
            ["lang", activelang()],
            ["tipe", "ARTICLE"]
        ])->orderBy("created_at", "DESC")->get()->map(function($row){
            $row->tag = \App\PostMeta::where("post_id", $row->id)
                ->where("meta_key", "tag")
                ->first();
            return $row;
        });
        
        $instagram = \App\InstagramFeed::orderBy("id", "asc")->get();

        $seo = seohelper("PAGE", "HOME");

        $data = [
            "banner"        => $banner,
            "banner_mobile" => $banner_mobile,
            "bakpia"        => $bakpia,
            "bolu"          => $bolu,
            "article"       => $article,
            "instagram"     => $instagram,
            "seo"           => $seo,
            "url"           => route("get.home"),
        ];
        return view("web/index", $data);
    }
}
