<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function index()
    {
        $data = [];
        $page = [];
            
        $page[]['link'] = route('get.index');
        $page[]['link'] = route('get.pages.abouts.indonesia_branch');
        $page[]['link'] = route('get.pages.abouts.system_ever');
        $page[]['link'] = route('get.pages.abouts.history');
        $page[]['link'] = route('get.pages.services.feature');
        $page[]['link'] = route('get.pages.services.quality_security');
        $page[]['link'] = route('get.pages.services.customer_industry');
        $page[]['link'] = route('get.pages.pricing.accounting_tax');
        $page[]['link'] = route('get.pages.pricing.integrated_erp');
        $page[]['link'] = route('get.pages.solutions.accounting_management_systems');
        $page[]['link'] = route('get.pages.solutions.i5_trading');
        $page[]['link'] = route('get.pages.solutions.i7_manufacture');
        $page[]['link'] = route('get.pages.article.article');
        $page[]['link'] = route('get.pages.article.article.search');
        $tagsall = \App\Tag::all();
        // dd($tagsall);
        foreach ($tagsall as $v) {
            $page[] = [
                'link' => route('get.pages.article.article.search') . "?cat=" . strtolower($v->title),
                'updated_at' => $v->updated_at
            ];
        }

        $page[]['link'] = route('get.pages.article.article.mode');
        $article = \App\Post::where("tipe", "ARTICLE")->get();
        foreach ($article as $v) {
            $page[] = [
                'link' => route('get.pages.article.article_detail', ['slug' => $v->slug]),
                'updated_at' => $v->updated_at
            ];
        }        
        $page[]['link'] = route('get.pages.article.news');
        $page[]['link'] = route('get.pages.article.article_list_category');
        $page[]['link'] = route('get.pages.support.support');
        $page[]['link'] = route('get.pages.support.support_guide');
        $page[]['link'] = route('get.pages.support.video');

        $article = \App\Video::get();
        foreach ($article as $v) {
            $page[] = [
                'link' => route('get.pages.support.video.detail', ['id' => $v->id]),
                'updated_at' => $v->updated_at
            ];
        }
        $page[]['link'] = route('get.pages.support.video.search');
        $page[]['link'] = route('get.pages.join_partnership');
        $legal = \App\Post::where("tipe", "legal")->get();
        foreach ($legal as $v) {
            $page[] = [
                'link' => route('get.legal', ['id' => $v->slug]),
                'updated_at' => $v->updated_at
            ];
        }
        $page[]['link'] = route('get.contact');

        //english
        $page[]['link'] = seeineng(route('get.index'));
        $page[]['link'] = seeineng(route('get.pages.abouts.indonesia_branch'));
        $page[]['link'] = seeineng(route('get.pages.abouts.system_ever'));
        $page[]['link'] = seeineng(route('get.pages.abouts.history'));
        $page[]['link'] = seeineng(route('get.pages.services.feature'));
        $page[]['link'] = seeineng(route('get.pages.services.quality_security'));
        $page[]['link'] = seeineng(route('get.pages.services.customer_industry'));
        $page[]['link'] = seeineng(route('get.pages.pricing.accounting_tax'));
        $page[]['link'] = seeineng(route('get.pages.pricing.integrated_erp'));
        $page[]['link'] = seeineng(route('get.pages.solutions.accounting_management_systems'));
        $page[]['link'] = seeineng(route('get.pages.solutions.i5_trading'));
        $page[]['link'] = seeineng(route('get.pages.solutions.i7_manufacture'));
        $page[]['link'] = seeineng(route('get.pages.article.article'));
        $page[]['link'] = seeineng(route('get.pages.article.article.search'));
        $page[]['link'] = seeineng(route('get.pages.article.news'));
        $page[]['link'] = seeineng(route('get.pages.article.article_list_category'));
        $page[]['link'] = seeineng(route('get.pages.support.support'));
        $page[]['link'] = seeineng(route('get.pages.support.support_guide'));
        $page[]['link'] = seeineng(route('get.pages.support.video'));
        $page[]['link'] = seeineng(route('get.pages.support.video.search'));
        $page[]['link'] = seeineng(route('get.pages.join_partnership'));
        $page[]['link'] = seeineng(route('get.contact'));
        // dd($page);

        $data['page'] = $page;
        return response()->view('sitemap/sitemap', $data)->header('Content-Type', 'text/xml');
    }
}
