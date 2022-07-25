<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HouseSearchingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_house()
    {
        $response = $this->get('api/house');
        $response->assertStatus(200);
    }

    public function test_house1()
    {
        // TODO:: need to add MockHttp
        $response = $this->get('api/house?name=The Victoria');
        $response->assertSimilarJson(["name" => "The Victoria"]);
    }
}
