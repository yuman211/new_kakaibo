<?php

declare(strict_types=1);

namespace App\Services\Results;

use App\Models\Result;

use function collect;

class StoreResultService implements IStoreResult
{
    /**
     * Name1のcostsのsum, Name2のcostsのsum, Name1のcostsのsumとName2のcostsのsumを計上したものを保存する
     * @param  array  $costsByOne Name1のコスト配列
     * @param  array  $costsByTwo Name2のコスト配列
     * @return Result
     */
    public function execute(array $costsByOne, array $costsByTwo): Result
    {
        $sumCostsForOne = collect($costsByOne)->sum();
        $sumCostsForTwo = collect($costsByTwo)->sum();
        $sum_all = $sumCostsForOne + $sumCostsForTwo;

        $params = [
            'sum_01' => $sumCostsForOne,
            'sum_02' => $sumCostsForTwo,
            'sum_all' => $sum_all
        ];

        $result = (new Result())->fill($params);
        $result->save();
        return $result;
    }
}
