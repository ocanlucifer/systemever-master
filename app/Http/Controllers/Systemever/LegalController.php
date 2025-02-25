<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LegalController extends Controller
{
    public function detail($slug)
    {
        $lang = "EN";
        $posts = \App\Post::where("tipe", "LEGAL")->get();
        $post = \App\Post::where("slug", $slug)->first();
        if (empty($post)) {
            $post = $posts[0];
        }

        $data['breadcrumbs'] = array(
            [ 
                'label'=>'Home',
                'link'=> route('get.index')
            ],
            [ 
                'label'=>$post->title,
                'link'=> route('get.legal', ['slug' => $post->slug])
            ], 
        );

        $data['post'] = $posts;
        $data['slug'] = $slug;

        return view('systemever/pages/support/legal',$data);
    }
}
