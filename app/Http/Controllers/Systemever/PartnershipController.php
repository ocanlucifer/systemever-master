<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnershipController extends Controller
{
    public function join_partnership(){
        $lang = activelang();
        $data['breadcrumbs'] = array(
            [
                'label'=>stringlang('Home', 'Home', '홈페이지'),
                'link'=> route('get.index')
            ],
            [
                'label'=> stringlang('Join', 'Bergabung', '가입하다'),
                'link'=>'#'
            ],
            [
                'label'=> stringlang('Partnership', 'Kemitraaan', '공동'),
                'link'=>'#'
            ],
        );
        $post = \App\Post::where([
            ["slug", "pertnership"],
            ["lang", "ID"]
        ])->first();
        if ($lang != $post->lang) {
            $child = \App\Post::where("parent_id", $post->id)->where("lang", $lang)->first();
            if (!empty($child)) {
                $post = $child;
            }
        }
        $data['data'] = json_decode($post->json_meta);

        $about = \App\About::where([
            ["title", "indonesia-branch"],
            ["lang", $lang]
        ])->first();
        $data["photo"] = json_decode($about->json_content);
        return view('systemever/pages/join_partnership',$data);
    }
}
