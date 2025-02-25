<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function setlang($id)
    {
        session(["active_lang" => $id]);

        return response()->json(session("active_lang"));
    }
}
