<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VisitControllerTest extends TestCase
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

    public function testTrackVisit()
    {
        $externalId = 'test_external_id';

        $response = $this->get("/api/track-visit/{$externalId}");

        $response->assertStatus(200);

        $this->assertDatabaseHas('visits', [
            'external_id' => $externalId,
        ]);
    }
}
