<?php

namespace App\Http\Controllers;
use App\Http\Requests\KakeiboRequest;
use Illuminate\Http\Request;

class KakeiboController extends Controller
{
    /**
     * @return view
     */
    function showHome(){
        return view('home');
    }

    /**
     * @return view
     */
    function showCreate(){
        return view('kakeibo.create');
    }

    /**
     *@param App\Http\Requests\KakeiboRequest
     */
    function exeStore(KakeiboRequest $request){
        $inputs=$request->all();
        dd($inputs);
    }
}
