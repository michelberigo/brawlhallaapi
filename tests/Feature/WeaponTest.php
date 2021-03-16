<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WeaponTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testWeaponsRequest()
    {
        $response = $this->get('/api/weapons');

        $response->assertStatus(200);
    }
}
