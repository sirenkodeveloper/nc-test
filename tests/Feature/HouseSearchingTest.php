<?php

namespace Tests\Feature;

use Database\Seeders\HouseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HouseSearchingTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_house()
    {
        $response = $this->post('api/house');
        $response->assertStatus(200);
    }

    public function test_house1()
    {
        $this->seed(HouseSeeder::class);

        // TODO:: need to add MockHttp
        $response = $this->post('api/house?name=The Victoria&price=374662:374662&bedrooms=4&bathrooms=2&storeys=2&garages=2');
        $response->assertExactJson([[
            'name' => 'The Victoria',
            'price' => 374662,
            'bedrooms' => 4,
            'bathrooms' => 2,
            'storeys' => 2,
            'garages' => 2
        ]]);
    }
}
