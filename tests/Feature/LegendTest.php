<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LegendTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLegendsRequest()
    {
        $response = $this->get('/api/legends');

        $response->assertStatus(200);
    }
}
