<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomUserControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUpdateUserStage()
    {
        $externalId = 'test_external_id';
        $stage = 'visited';

        $response = $this->postJson('/api/update-custom-user-stage', [
            'externalId' => $externalId,
            'stage' => $stage,
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('custom_users', [
            'external_id' => $externalId,
            'stage' => $stage,
        ]);
    }

    
}
