<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = 'results';

    protected $fillable =
    [
        'sum_all',
        'sum_01',
        'sum_02',
        'difference',
    ];


/**
 * 結果を作成、挿入し、IDを返す
 *@param array
 *@return int $id
 */
function insertGetResult($request){
        //name1の合計
        $sum_01 = 0;
        foreach ($request->costs_01 as $cost_01) {
            $sum_01 += $cost_01;
        }
        //name2の合計
        $sum_02 = 0;
        foreach ($request->costs_02 as $cost_02) {
            $sum_02 += $cost_02;
        }
        //総合計
        $sum_all = $sum_01 + $sum_02;

        $results= Result::create(['sum_all' => $sum_all, 'sum_01' => $sum_01, 'sum_02' => $sum_02]);
        return $results->id;
    }
}
