<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WatchesTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_send_not_found_watch(): void
    {
        $response = $this->get('/watches/show/14');
        $response->assertStatus(404);
    }

    public function test_if_view_contains_specify_text()
    {
        $response = $this->get('/base');

        $response->assertStatus(404);
        $response->assertDontSee('Watches');
        
    }
}
