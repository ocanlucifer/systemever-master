<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    public function index()
    {
        $data['breadcrumbs'] = array(
            [
                "label" => "Beranda",
                "link" => route("get.index")
            ],
            [
                "label" => "Notice",
                "link" => route("get.pages.notice")
            ]
        );

        $search = '1=1';
        $order = 'desc';
        $field = 'date_start';

        if (get('search')) {
            $search = "title like '%".get('search')."%'";
        }
        if (get('order') == 'newest') {
            $order = 'asc';
        }
        if (get('order') == 'viewed') {
            $field = 'views';
        }
        $data['data'] = \App\Notice::whereRaw($search)->where("lang", activelang())->orderBy($field, $order)->paginate(20);
        // return $data['data'];

        return view('systemever/pages/notice/index',$data);
    }

    public function detail($slug)
    {
        $search = '1=1';
        $order = 'desc';
        $field = 'date_start';

        if (get('search')) {
            $search = "title like '%".get('search')."%'";
        }
        if (get('order') == 'newest') {
            $order = 'asc';
        }
        if (get('order') == 'viewed') {
            $field = 'views'; 
        }
        
        $data['detail'] = $detail = \App\Notice::where('slug', $slug)->firstOrFail();
        $detail->views = $detail->views + 1;
        $detail->save();
        
        $data['breadcrumbs'] = array(
            [
                "label" => "Beranda",
                "link" => route("get.index")
            ],
            [
                "label" => "Notice",
                "link" => route("get.pages.notice")
            ],
            [
                "label" => $detail->title,
                "link" => "#"
            ]
        );
        $all = \App\Notice::select("id")->whereRaw($search)->where("lang", activelang())->orderBy($field, $order)->get();
        $pref_id = 0;
        $next_id = 0;
        foreach ($all as $k => $v) {
            if ($v->id == $detail->id) {
                $pref_id = $all[($k-1)]->id ? \App\Notice::find($all[($k-1)]->id) : null;
                $next_id = $all[($k+1)]->id ? \App\Notice::find($all[($k+1)]->id) : null;
            }
        }
        $data['data'] = \App\Notice::where('slug','!=', $slug)->whereRaw($search)->where("lang", activelang())->orderBy($field, $order)->paginate(20);
        $data['prev'] = $pref_id;
        $data['next'] = $next_id;
        return view('systemever.pages.notice.detail',$data);
    }

}
