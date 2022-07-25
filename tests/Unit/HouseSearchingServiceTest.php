<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Services\HouseSearchingService;
use App\Services\HouseSearchingRequestDTO;

class HouseSearchingServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_search_full()
    {
        $houseSearchingService = new HouseSearchingService();

        $searchingRequest = new HouseSearchingRequestDTO();
        $searchingRequest->name = "The Victoria";
        $searchingRequest->price = 374662;
        $searchingRequest->bedrooms = 2;
        $searchingRequest->bathrooms = 2;
        $searchingRequest->storeys = 2;
        $searchingRequest->garages = 2;

        $result = $houseSearchingService->search($searchingRequest);
        return $this->assertEquals("The Victoria", $result["name"]);
    }
}
