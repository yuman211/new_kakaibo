<?php

namespace Tests\Feature\Kakeibo;

use Tests\TestCase;

class HomeKakeiboControllerTest extends TestCase
{
    public function testHome(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
