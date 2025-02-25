<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function video(){
        $lang = activelang();
        $data['breadcrumbs'] = array(
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('Support', 'Dukungan'),
                'link'=>'#'
            ], 
            [ 
                'label'=>'Video',
                'link'=> route('get.pages.support.video')
            ], 
        );

        $category = get('cat', 1);
        $data['video'] = \App\Video::where([
            ["video_categories_id", $category],
            // ["lang", $lang]
        ])->get();
        $data['selected_video'] = $data['video'][0];
        $data['video_categories'] = \App\VideoCategory::get();
        // dd($data);
        return view('systemever/pages/support/video',$data);
    }

    public function detail($id){
        $data['breadcrumbs'] = array(
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('Support', 'Dukungan'),
                'link'=>'#'
            ], 
            [ 
                'label'=>'Video',
                'link'=> route('get.pages.support.video')
            ], 
        );

        $category = get('cat', 1);
        $selected_video = \App\Video::find($id);
        $list = \Session::get('watchvideo', []);
        $list[] = $selected_video->id;
        \Session::put('watchvideo', $list);
        $data['video'] = \App\Video::where("video_categories_id", $selected_video->video_categories_id)->get();
        $data['selected_video'] = $selected_video;
        $data['video_categories'] = \App\VideoCategory::get();
        // dd($data);
        return view('systemever/pages/support/video',$data);
    }

    public function search(){
        $data['breadcrumbs'] = array(
            [ 
                'label'=> stringlang('Home', 'Beranda'),
                'link'=>route("get.index")
            ],
            [ 
                'label'=> stringlang('Support', 'Dukungan'),
                'link'=>'#'
            ], 
            [ 
                'label'=>'Video',
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
        
        $data['video'] = \App\Video::where($param)->get();
        $data['video_categories'] = \App\VideoCategory::get();
        // dd($data);
        return view('systemever/pages/support/video-search',$data);
    }
}
