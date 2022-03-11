<?php

namespace Tests\Feature\Kakeibo;

use Tests\TestCase;

class CreateKakeiboControllerTest extends TestCase
{
    public function testHome(): void
    {
        $response = $this->get('/create');

        $response->assertStatus(200);
    }
}
