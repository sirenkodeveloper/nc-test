<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;

use App\Services\HouseSearchingService;
use App\Services\HouseSearchingRequestDTO;
use Database\Seeders\HouseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;;

class HouseSearchingServiceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_search_full()
    {
        $this->seed(HouseSeeder::class);

        $houseSearchingService = new HouseSearchingService();

        $searchingRequest = new HouseSearchingRequestDTO();
        $searchingRequest->name = "The Victoria";
        $searchingRequest->price = "374662:5000000";
        $searchingRequest->bedrooms = 4;
        $searchingRequest->bathrooms = 2;
        $searchingRequest->storeys = 2;
        $searchingRequest->garages = 2;

        $result = $houseSearchingService->search($searchingRequest);
        return $this->assertEquals("The Victoria", $result[0]['name']);
    }
}
