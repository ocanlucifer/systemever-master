<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function video(){
        $lang = activelang() == 'ID' ? 'EN' : activelang();
        $data['breadcrumbs'] = array(
            [
                'label'=> stringlang('Home', 'Beranda', '홈페이지'),
                'link'=>route("get.index")
            ],
            [
                'label'=> stringlang('Support', 'Dukungan', '지원하다'),
                'link'=>'#'
            ],
            [
                'label'=>stringlang('Video', 'Video', '동영상'),
                'link'=> route('get.pages.support.video')
            ],
        );

        $category = get('cat', 1);
        $data['video'] = \App\Video::where([
            ["video_categories_id", $category],
            ["lang", $lang],
        ])->get();
        $data['selected_video'] = $data['video'][0];
        // $data['video_categories'] = \App\VideoCategory::get();
        $translations = [
            'Accounting' => '회계',
            'Operating' => '운영',
            'Corporate' => '기업',
            'Master' => '주인',
            'Purchase' => '구입',
            'Sales' => '매상',
        ];

        $data['video_categories'] = \App\VideoCategory::get()->map(function ($item) use ($lang, $translations) {
            if ($lang == 'KOR' && isset($translations[$item->name])) {
                $item->name = $translations[$item->name];
            }
            return $item;
        });
        // dd($data);
        return view('systemever/pages/support/video',$data);
    }

    public function detail($id){
        $lang = activelang() == 'ID' ? 'EN' : activelang();
        $data['breadcrumbs'] = array(
            [
                'label'=> stringlang('Home', 'Beranda', '홈페이지'),
                'link'=>route("get.index")
            ],
            [
                'label'=> stringlang('Support', 'Dukungan', '지원하다'),
                'link'=>'#'
            ],
            [
                'label'=>stringlang('Video', 'Video', '동영상'),
                'link'=> route('get.pages.support.video')
            ],
        );

        $category = get('cat', 1);
        $selected_video = \App\Video::find($id);
        $list = \Session::get('watchvideo', []);
        $list[] = $selected_video->id;
        \Session::put('watchvideo', $list);
        $data['video'] = \App\Video::where("video_categories_id", $selected_video->video_categories_id)->where('lang',$lang)->get();
        $data['selected_video'] = $selected_video;
        // $data['video_categories'] = \App\VideoCategory::get();
        $translations = [
            'Accounting' => '회계',
            'Operating' => '운영',
            'Corporate' => '기업',
            'Master' => '주인',
            'Purchase' => '구입',
            'Sales' => '매상',
        ];

        $data['video_categories'] = \App\VideoCategory::get()->map(function ($item) use ($lang, $translations) {
            if ($lang == 'KOR' && isset($translations[$item->name])) {
                $item->name = $translations[$item->name];
            }
            return $item;
        });
        // dd($data);
        return view('systemever/pages/support/video',$data);
    }

    public function search(){
        $lang = activelang() == 'ID' ? 'EN' : activelang();
        $data['breadcrumbs'] = array(
            [
                'label'=> stringlang('Home', 'Beranda', '홈페이지'),
                'link'=>route("get.index")
            ],
            [
                'label'=> stringlang('Support', 'Dukungan', '지원하다'),
                'link'=>'#'
            ],
            [
                'label'=>stringlang('Video', 'Video', '동영상'),
                'link'=> route('get.pages.support.video')
            ],
        );

        $category = get('cat', 0);
        $search = get('q', "");

        $param = [];
        if (!empty($category)) {
            $param[] = ["video_categories_id", $category];
        }
        if (!empty($search)) {
            $param[] = ['title', 'like', '%'.$search.'%'];
        }

        $data['video'] = \App\Video::where($param)->where('lang',$lang)->get();
        // $data['video_categories'] = \App\VideoCategory::get();
        $translations = [
            'Accounting' => '회계',
            'Operating' => '운영',
            'Corporate' => '기업',
            'Master' => '주인',
            'Purchase' => '구입',
            'Sales' => '매상',
        ];

        $data['video_categories'] = \App\VideoCategory::get()->map(function ($item) use ($lang, $translations) {
            if ($lang == 'KOR' && isset($translations[$item->name])) {
                $item->name = $translations[$item->name];
            }
            return $item;
        });
        // dd($data);
        return view('systemever/pages/support/video-search',$data);
    }
}
