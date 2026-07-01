<?php

namespace App\Http\Controllers\Systemever;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function form()
    {
        $data['breadcrumbs'] = array(
            [ 
                'label'=>'Home',
                'link'=> route('get.index')
            ],
            [ 
                'label'=>'Contact',
                'link'=> route('get.contact')
            ], 
        );

        return view('systemever/pages/support/contact',$data);
    }
}
