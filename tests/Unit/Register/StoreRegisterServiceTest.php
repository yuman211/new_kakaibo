<?php

namespace Tests\Unit\Register;

use App\Models\Register;
use App\Models\Result;
use App\Services\Register\IStoreRegister;
use App\Services\Register\StoreRegisterService;
use App\Services\Results\IStoreResult;
use App\Services\Results\StoreResultService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class StoreRegisterServiceTest extends TestCase
{
    use DatabaseTransactions;

    private IStoreRegister $sut;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sut = new StoreRegisterService();
    }

    public function testCanSaveResult(): void
    {
        $costsByOne = [1, 2];
        $costsByTwo = [6, 7];

        /** @var Result $result */
        $result = Result::factory()->create([
            'sum_all' => 16,
            'sum_01' => 3,
            'sum_02' => 13
        ]);

        $this->sut->execute($costsByOne, $costsByTwo, $result);

        $this->assertDatabaseHas(Register::class, [
            'cost' => $costsByOne[0],
            'members_id' => 1,
            'results_id' => $result->id
        ]);

        $this->assertDatabaseHas(Register::class, [
            'cost' => $costsByOne[1],
            'members_id' => 1,
            'results_id' => $result->id
        ]);
    }
}
