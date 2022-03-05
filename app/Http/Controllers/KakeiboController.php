<?php

namespace App\Http\Controllers;
use App\Http\Requests\KakeiboRequest;
use App\Models\Register;
use App\Models\Result;
use Illuminate\Http\Request;

class KakeiboController extends Controller
{

    function __construct(Register $register, Result $result){
        $this->register = $register;
        $this->result = $result;
    }

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

        // \DB::beginTransaction();
        // try {
        //     //データを整形
        //     $organizedInformation = $this->register->organizeInformation($request);
        //     //登録
        //     $organizedInformation->RegisterInformation();
        // } catch (\Throwable $e) {
        //     \DB::rollback();
        //     abort(500);
        // }

        //resultsに挿入、IDを取得。
        $result_id=$this->result->insertGetResult($request);

        //データを整形(cost,members_id,results_id)を揃える
        $organizedInformation=$this->register->organizeInformation($request,$result_id);
        //登録
        $this->register->RegisterInformation($organizedInformation);
        //結果画面へ遷移
        return redirect()->route('result')->withInput($organizedInformation);
    }

    /**
     * @return view
     */
    function showResult(Request $request){
        $organizedInformation = $request->old();
        dd($organizedInformation);
    }

    }
