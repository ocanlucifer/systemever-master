<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function captcha(ReCaptchaFormRequest $reCaptchaFormRequest)
    {
        return "Done!";
    }
}
