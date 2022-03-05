<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KakeiboController extends Controller
{
    /**
     * @return view
     */
    function showHome(){
        return view('home');
    }
}
