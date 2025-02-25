<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            [
                "link" => route("get.home"),
                "label" => "Home",
            ],
            [
                "link" => route("get.article", "all"),
                "label" => "Article",
            ]
        ];

        $article_lates = null;
        $article_popular = [];
        $article_custom_panel = [];
        $article_tags = [];
        
        $article_lates = \App\Post::where([
            ["tipe", "ARTICLE"],
            ["lang", activelang()],
        ])->OrderBy("created_at", "desc")->first();

        $article_lates->tag = \App\PostMeta::where("post_id", $article_lates->id)
            ->where("meta_key", "tag")
            ->first();

        $article_popular = \App\Post::where([
            ["tipe", "ARTICLE"],
            ["lang", activelang()],
        ])->OrderBy("views", "desc")->limit(10)->get()->map(function($row){
            $row->tag = \App\PostMeta::where("post_id", $row->id)
                ->where("meta_key", "tag")
                ->first();
            return $row;
        });

        $panel = \App\Settings::where("setting_type", "article_panel")->get();
        foreach ($panel as $p) {
            $article_custom_panel[] = [
                "title" => $p->key,
                "data"  => \App\Post::where([
                    ["tipe", "ARTICLE"],
                    ["lang", activelang()],
                ])->whereIn("id", json_decode($p->value))
                    ->orderBy("views", "desc")
                    ->limit(10)
                    ->get()->map(function($row){
                        $row->tag = \App\PostMeta::where("post_id", $row->id)
                            ->where("meta_key", "tag")
                            ->first();
                        return $row;
                    })
            ];
        }

        $article_tags = \App\Tag::all();

        $article_by_tags = function($slug) {
            $post_id_by_category = \App\PostMeta::where("meta_value", $slug)
                ->where("meta_key", "tag")
                ->get()
                ->pluck("post_id")
                ->toArray();

            $articles = \App\Post::where([
                ["tipe", "ARTICLE"],
                ["lang", activelang()],
            ])->whereIn("id", $post_id_by_category)
                ->orderBy("created_at", "desc")
                ->limit(2)
                ->get()->map(function($row) use ($slug) {
                    $row->tag = \App\PostMeta::where("post_id", $row->id)
                        ->where("meta_value", $slug)
                        ->where("meta_key", "tag")
                        ->first();
                    return $row;
                });

            return $articles;
        };

        $seo = seohelper("PAGE", "ARTICLE LIST");
        
        $data = [
            "slug"                  => $slug,
            "breadcrumbs"           => $breadcrumbs,
            "article_lates"         => $article_lates,
            "article_popular"       => $article_popular,
            "article_custom_panel"  => $article_custom_panel,
            "article_tags"          => $article_tags,
            "article_by_tags"       => $article_by_tags,
            "seo"                   => $seo,
            "url"                   => route("get.article", "all")
        ];

        // dd($data);

        return view("web/pages/article/article", $data);
    }

    public function categories($slug)
    {
        $url = route("get.article.category", $slug);
        $breadcrumbs = [
            [
                "link" => route("get.home"),
                "label" => "Home",
            ],
            [
                "link" => route("get.article", "all"),
                "label" => "Article",
            ],
            [
                "link" => $url,
                "label" => ucfirst($slug),
            ],
        ];

        $article_tags = \App\Tag::all();

        $post_id_by_category = \App\PostMeta::where("meta_value", $slug)
                    ->where("meta_key", "tag")
                    ->get()
                    ->pluck("post_id")
                    ->toArray();
        $sort = "created_at";
        if (get("sort") == "mostview") {
            $sort = "views";
        }        

        $articles = \App\Post::where([
            ["tipe", "ARTICLE"],
            ["lang", activelang()],
        ])->whereIn("id", $post_id_by_category)
        ->orderBy($sort, "desc")
        ->paginate(15);

        foreach ($articles as $k => $v) {
            $articles[0]->tag = \App\PostMeta::where("post_id", $v->id)
            ->where("meta_value", $slug)
            ->where("meta_key", "tag")
            ->first();
        }

        $data = [
            "slug"                  => $slug,
            "breadcrumbs"           => $breadcrumbs,
            "article_tags"          => $article_tags,
            "articles"              => $articles,
            "seo"                   => $seo,
            "url"                   => $url,
        ];
        
        $seo = seohelper("PAGE", "ARTICLE LIST");
        
        return view("web/pages/article/article-category", $data);
    }

    public function detail($slug)
    {
        $slug_explode = explode("-", $slug);
        $id = end($slug_explode);

        $article = \App\Post::find($id);
        $meta = $list_meta = $tag = \App\PostMeta::where("post_id", $id)
            ->where("meta_key", "tag")
            ->get();

        if ($article->lang != activelang()) {
            return redirect(route('get.article'));
        }


        //related
        $list_meta = $list_meta->pluck("meta_value")->toArray();
        $post_id_by_category = \App\PostMeta::whereIn("meta_value", $list_meta)
            ->where("meta_key", "tag")
            ->get()
            ->pluck("post_id")
            ->toArray();

        $related = \App\Post::where([
            ["tipe", "ARTICLE"],
            ["lang", activelang()],
            ["id", "!=", $id]
        ])->whereIn("id", $post_id_by_category)
            ->orderBy("created_at", "desc")
            ->limit(3)
            ->get()->map(function($row) use ($slug) {
                $row->tag = \App\PostMeta::where("post_id", $row->id)
                    ->where("meta_key", "tag")
                    ->first();
                return $row;
            });

        $breadcrumbs = [
            [
                "link" => route("get.home"),
                "label" => "Home",
            ],
            [
                "link" => route("get.article", "all"),
                "label" => "Article",
            ],
            // [
            //     "link" => route('get.article.detail', $slug),
            //     "label" => $article->title,
            // ],
        ];

        $seo = seohelper("post", "post", $id);


        $data = [
            "article"               => $article,
            "tag"                   => $tag,
            "related"               => $related,
            "breadcrumbs"           => $breadcrumbs,
            "seo"                   => $seo,
            "url"                   => route('get.article.detail', $slug),
        ];

        return view("web/pages/article/article_detail", $data);
    }
}
