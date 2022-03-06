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


        \DB::beginTransaction();
        try {
            //resultsに挿入、IDを取得。
            $results = $this->result->insertGetResult($request);
            $result_id = $results->id;
            //データを整形(cost,members_id,results_id)を揃える
            $organizedInformation = $this->register->organizeInformation($request, $result_id);
            //登録
            $this->register->RegisterInformation($organizedInformation);
            \DB::commit();
            //結果画面へ遷移
            return redirect()->route('result')->with($results->all()->toArray());
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
    }

    /**
     * @return view
     */
    function showResult(Request $request){
        $results = $request->session()->all();
        $request->session()->flush();
        dd($results);
        return view('kakeibo.result',compact('results'));
    }

    }
