<?php

namespace App\Services\Register;

use App\Models\Result;

interface IStoreRegister
{
    /**
     * @param  array  $costsByOne
     * @param  array  $costsByTwo
     * @param  Result  $result
     * @return void
     */
    public function execute(array $costsByOne, array $costsByTwo, Result $result): void;
}
