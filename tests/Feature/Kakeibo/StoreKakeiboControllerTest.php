<?php

namespace Tests\Feature\Kakeibo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreKakeiboControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testStore(): void
    {
        $response = $this->post('/store', [
            'costs_01' => [
                1, 2
            ],
            'costs_02' => [
                3, 4
            ]
        ]);

        $response->assertStatus(302);
    }
}
