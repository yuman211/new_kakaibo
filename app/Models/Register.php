<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'registers';

    protected $fillable =
    [
        'cost',
        'categories_id',
        'members_id',
        'results_id',
    ];

    /**
     * 入力した値をユーザーごとに振り分ける
     * @param array $request $result_id
     * @return object
     */
    public function organizeInformation($request,$result_id){
        $organizedInformation = [];

        foreach($request->costs_01 as $cost_01)
        {
            if (!empty($cost_01)) {
                $organizedInformation[] =
                    [
                        'cost' => $cost_01,
                        'members_id' => 1,
                        'results_id' => $result_id,
                    ];
            }
        }

        foreach ($request->costs_02 as $cost_02) {
            if(!empty($cost_02)){
            $organizedInformation[] =
                [
                    'cost' => $cost_02,
                    'members_id' => 2,
                    'results_id' => $result_id,
                ];
            }
        }
        return $organizedInformation;
    }

    /**
     * 登録する
     * @param array $organizedInformation
     * @return bool
     */
    public function RegisterInformation($organizedInformation){
        foreach($organizedInformation as $eachInformation){
            Register::create($eachInformation);
        }
    //同時に情報を返して結果画面で表示する
        return $organizedInformation;
    }


}
