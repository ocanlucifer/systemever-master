<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LegalController extends Controller
{
    public function detail($slug)
    {
        $slug_explode = explode("-", $slug);
        $id = end($slug_explode);

        $page = \App\Post::find($id);

        if ($page->lang != activelang()) {
            $legal = legal_page_list();
            return redirect(route("get.legal", slug($legal[0]->title) . "-" . $legal[0]->id));
        }


        $breadcrumbs = array(
            [ 
                'label' => 'Home',
                'link'  => route("get.home")
            ],
            [ 
                'label' => 'Support',
                'link'  => ""
            ],
            [ 
                'label' => $page->title,
                'link'  => route("get.legal", slug($page->title) . "-" . $page->id)
            ], 
        );

        $seo = seohelper("legal", "legal", $page->id);

        $data = [
            'breadcrumbs'   => $breadcrumbs,
            'page'          => $page,
            'seo'           => $seo,
            'url'           => route("get.legal", slug($page->title) . "-" . $page->id)
        ];

        return view("web/support", $data);
    }
}
