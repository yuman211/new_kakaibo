<?php

declare(strict_types=1);

namespace App\Services\Register;

use App\Models\Register;
use App\Models\Result;

class StoreRegisterService implements IStoreRegister
{
    /**
     * @param  array  $costsByOne  Name1のコスト配列
     * @param  array  $costsByTwo  Name2のコスト配列
     * @param  Result  $result
     * @return void
     */
    public function execute(array $costsByOne, array $costsByTwo, Result $result): void
    {
        $organizedInformation = $this->organizeInformation($costsByOne, $costsByTwo, $result->id);
        Register::insert($organizedInformation);
    }

    /**
     * 入力した値をユーザーごとに振り分ける
     * @param  array  $costsByOne
     * @param  array  $costsByTwo
     * @param  int  $resultId
     * @return array
     */
    private function organizeInformation(array $costsByOne, array $costsByTwo, int $resultId): array
    {
        $organizedInformation = [];

        foreach ($costsByOne as $cost_01) {
            if (!empty($cost_01)) {
                $organizedInformation[] =
                    [
                        'cost' => $cost_01,
                        'members_id' => 1,
                        'results_id' => $resultId,
                    ];
            }
        }

        foreach ($costsByTwo as $cost_02) {
            if (!empty($cost_02)) {
                $organizedInformation[] =
                    [
                        'cost' => $cost_02,
                        'members_id' => 2,
                        'results_id' => $resultId,
                    ];
            }
        }
        return $organizedInformation;
    }

}
