<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function article()
    {
        $data['breadcrumbs'] = array(
            [
                'label'=> stringlang('Home', 'Beranda', '홈페이지'),
                'link'=> route('get.index')
            ],
            [
                'label'=> stringlang('Business Insight', 'Business Insight', '인사이트'),
                'link'=> route('get.pages.article.article')
            ],
            [
                'label'=> stringlang('General', 'General', '일반'),
                'link'=> route('get.pages.article.article')
            ],

        );
        $lang = "EN";
        $top_en = \App\Settings::where([
            ["setting_type", "top_article_id"],
            // ["lang", $lang]
        ])->first();
        $top_en = \App\Settings::where([
            ["setting_type", "top_article_en"],
            // ["lang", $lang]
        ])->first();
        if ($lang == "EN") {
            $data['top'] = json_decode($top_en->value);
        } else {
            $data['top'] = json_decode($top_id->value);
        }

        $data['top']->main_top_article_en = \App\Post::find($data['top']->main_top_article_en);
        $data['top']->sec_1_top_article_en = \App\Post::find($data['top']->sec_1_top_article_en);
        $data['top']->sec_2_top_article_en = \App\Post::find($data['top']->sec_2_top_article_en);


        $data['highlight'] = \App\Settings::where([
            // ['key', $lang],
            ["setting_type", "article_highlight"],
        ])->get()->pluck('value');
        $data['highlight'] = \App\Post::whereIn('id', $data['highlight'])->where("is_show", 1)->get();

        // dd($data['highlight']);
        $data['popular'] = \App\Post::where([
            // ['lang', $lang],
            ['is_show', 1],
            ['tipe', 'ARTICLE']
        ])->orderBy('views', 'desc')->paginate(6);
        $data['lates'] = \App\Post::where([
            // ['lang', $lang],
            ['tipe', 'ARTICLE'],
            ['is_show', 1]
        ])->orderBy('id', 'desc')->paginate(4);

        return view('systemever/pages/article/article',$data);
    }

    public function article_list_category()
    {
        $lang = "EN";
        if (get('mode') == 'highlights') {
            $related = \App\Settings::where([
                // ['key', $lang],
                ["setting_type", "article_highlight"],
            ])->get()->pluck('value');
        }
        if (get('cat')) {
            $related = \App\PostMeta::where("meta_key", "tag")
            ->whereIn("meta_value", [get('cat')])
            ->get()
            ->pluck("post_id");
        }

        if (!empty($related)) {
            $data['data'] = $post = \App\Post::where([
                // ['lang', $lang],
                ['tipe', 'ARTICLE']
            ])->whereIn("id", $related)->orderBy('id', 'desc')->paginate(10);
        } else {
            $sort = 'id';
            if (get('mode') == 'popular') {
                $sort = 'views';
            }
            $data['data'] = $post = \App\Post::where([
                // ['lang', $lang],
                ['tipe', 'ARTICLE']
            ])->orderBy($sort, 'desc')->paginate(10);
        }


        $data['pagination'] = $post->toArray();

        $data['breadcrumbs'] = array(
            [
                'label'=>stringlang('Home', 'Beranda', '홈페이지'),
                'link'=> route('get.index')
            ],
            [
                'label'=> stringlang('Business Insight', 'Business Insight', '인사이트'),
                'link'=> route('get.pages.article.article')
            ],
            [
                'label'=> stringlang('Article', 'Article'),
                'link'=> route('get.pages.article.article')
            ],

        );

        // dd($data);

        return view('systemever/pages/article/article_list_category',$data);
    }

    public function article_detail($slug)
    {
        $post = \App\Post::where("slug", $slug)->first();
        if (empty($post)) {
            return view('systemever/pages/article/article_not_found');
        }

        $post->views = $post->views + 1;
        $post->save();

        $lang = "EN";
        $data['data'] = $post;
        $data['meta'] = \App\PostMeta::where([
            ["post_id", $post->id],
            ["meta_key", "tag"]
        ])->get()->pluck("meta_value");

        $data['popular'] = \App\Post::where([
            // ['lang', $lang],
        ])->orderBy('views', 'desc')->paginate(6);

        $related = \App\PostMeta::where("meta_key", "tag")
            ->whereIn("meta_value", $data['meta'])
            ->get()
            ->pluck("post_id");
        $data['related'] = \App\Post::whereIn("id", $related)->orderBy('id', 'desc')->paginate(4);

        $data['breadcrumbs'] = array(
            [
                'label'=>stringlang('Home', 'Beranda', '홈페이지'),
                'link'=> route('get.index')
            ],
            // [
            //     'label'=> stringlang('Business Insight', 'Business Insight', '인사이트'),
            //     'link'=> route('get.pages.article.article')
            // ],
            [
                'label'=>'Article',
                'link'=> route('get.pages.article.article')
            ],
            [
                'label'=>$post->title,
                'link'=> route('get.pages.article.article_detail', ['slug' => $post->slug])
            ],
        );

        $seometa = \App\SeoTag::where([
            ["location", "post"],
            ["reff_id", $post->id]
        ])->first();

        $data['article_seo_meta'] = [
            'title' => $seometa->title,
            'keyword' => $seometa->keyword,
            'description' => $seometa->description,
            'script' => $seometa->script,
            'image' => $post->featured_image,
            'url' => route('get.pages.article.article_detail', ['slug' => $post->slug]),
        ];

        // dd($seometa);

        return view('systemever/pages/article/article_detail',$data);
    }

    public function news(){
        $data['breadcrumbs'] = array(
            [
                'label'=>stringlang('Home', 'Beranda', '홈페이지'),
                'link'=> route('get.index')
            ],
            [
                'label'=> stringlang('Business Insight', 'Business Insight', '인사이트'),
                'link'=> route('get.pages.article.article')
            ],
            [
                'label'=>stringlang('News', 'News', '뉴스'),
                'link'=> route('get.pages.article.news')
            ],
        );
        $lang = "EN";
        $data['data'] = $paginate =  \App\Post::where([
            ["tipe", "press_release"],
            ["is_show", "1"]
        ])->orderBy('id','desc')->paginate(10);
        $data['pagination'] = $paginate->toArray();
        // dd($data);
        return view('systemever/pages/article/news',$data);
    }

    public function professional()
    {
        $data['breadcrumbs'] = array(
            [
                'label'=>stringlang('Home', 'Beranda', '홈페이지'),
                'link'=> route('get.index')
            ],
            [
                'label'=> stringlang('Business Insight', 'Business Insight', '인사이트'),
                'link'=> route('get.pages.article.article')
            ],
            [
                'label'=>stringlang('Professional', 'Professional', '프로페셔널'),
                'link'=> route('get.pages.article.professional')
            ],

        );

        $data['article'] = \App\Post::where([
            // ['lang', $lang],
            ['tipe', 'PROFFESIONAL'],
            ['is_show', "1"]
        ])->orderBy('id', 'desc')->paginate(12);

        $data['pagination'] = $data['article']->toArray();

        return view('systemever/pages/article/professional',$data);
    }

    public function ceo_forum()
    {
        $data['breadcrumbs'] = array(
            [
                'label'=> stringlang('Home', 'Beranda', '홈페이지'),
                'link'=> route('get.index')
            ],
            [
                'label'=> stringlang('Business Insight', 'Business Insight', '인사이트'),
                'link'=> route('get.pages.article.article')
            ],
            [
                'label'=> stringlang('Ceo Forum', 'Ceo Forum', 'Ceo Forum'),
                'link'=> route('get.pages.article.ceo_forum')
            ],

        );
        $lang = activelang();

        // dd($data['highlight']);
        $data['ceo_forum'] = \App\CEOForum::where([
            // ['lang', $lang],
        ])->orderBy('post_date', 'desc')->paginate(10);

        return view('systemever/pages/article/ceo_forum',$data);
    }

    public function ceo_forum_detail($id)
    {
        $data = \App\CEOForum::where("id", $id)->first();
        if (empty($data)) {
            return view('systemever/pages/article/article_not_found');
        }


        // dd($data);

        return view('systemever/pages/article/ceo_forum_detail',['data' => $data]);
    }
}
