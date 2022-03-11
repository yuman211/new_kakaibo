<?php

namespace App\Services\Results;

use App\Models\Result;

interface IStoreResult
{
    /**
     * @param  array  $costsByOne
     * @param  array  $costsByTwo
     * @return Result
     */
    public function execute(array $costsByOne, array $costsByTwo): Result;
}
