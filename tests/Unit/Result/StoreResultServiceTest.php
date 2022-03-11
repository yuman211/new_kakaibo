<?php

namespace Tests\Unit\Result;

use App\Services\Results\IStoreResult;
use App\Services\Results\StoreResultService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class StoreResultServiceTest extends TestCase
{
    use DatabaseTransactions;

    private IStoreResult $sut;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sut = new StoreResultService();
    }

    public function testCanSaveResult(): void
    {
        $costsByOne = [1, 2, 3, 4, 5];
        $costsByTwo = [6, 7, 8, 9, 10];

        $result = $this->sut->execute($costsByOne, $costsByTwo);

        $this->assertEquals(15, $result->sum_01);
        $this->assertEquals(40, $result->sum_02);
        $this->assertEquals(55, $result->sum_all);
    }

    public function testCantSaveResultByString(): void
    {
        $costsByOne = ["a"];
        $costsByTwo = ["b"];

        $this->expectException(\TypeError::class);
        $result = $this->sut->execute($costsByOne, $costsByTwo);
    }

}
