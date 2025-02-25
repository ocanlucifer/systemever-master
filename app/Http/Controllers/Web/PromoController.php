<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromoController extends Controller
{
    public function index($slug)
    {
        $slug_explode = explode("-", $slug);
        $id = end($slug_explode);

        $breadcrumbs = [
            [
                "link" => route("get.home"),
                "label" => "Home",
            ],
            [
                "link" => route("get.promo", "all"),
                "label" => "Promo",
            ],
        ];

        $param = [];
        $param[] = ["lang", activelang()];
        if (!empty($id && $id != "all")) {
            $param[] = ["category_id", $id];
        }
        
        $promo = \App\Promo::where($param)->orderBy("created_at", "DESC")->paginate(15);

        $cat = \App\Categories::where("type", "PROMO")->get();

        $seo = seohelper("PAGE", "PROMO LIST");

        $data = [
            "breadcrumbs"   => $breadcrumbs,
            "promo"         => $promo,
            "cat"           => $cat,
            "seo"           => $seo,
            "url"           => route("get.promo", "all"),
        ];        

        return view("web/pages/promo/promo", $data);
    }

    public function detail($slug)
    {
        $slug_explode = explode("-", $slug);
        $id = end($slug_explode);

        $promo = \App\Promo::find($id);

        if ($promo->lang != activelang()) {
            return redirect(route('get.promo', 'all'));
        }

        $breadcrumbs = [
            [
                "link" => route("get.home"),
                "label" => "Home",
            ],
            [
                "link" => route("get.promo", "all"),
                "label" => "Promo",
            ],
            // [
            //     "link" => route("get.promo.detail", $slug),
            //     "label" => $promo->title,
            // ],
        ];

        $seo = seohelper("promo", "promo", $id);

        $data = [
            "breadcrumbs"   => $breadcrumbs,
            "promo"         => $promo,
            "seo"           => $seo,
            "url"           => route("get.promo.detail", $slug)
        ];

        return view("web/pages/promo/promo_detail", $data);
    }
}
