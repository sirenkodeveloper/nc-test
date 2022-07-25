<?php

namespace App\Services;

use App\Services\HouseSearchingRequestDTO;
use App\Models\House;

class HouseSearchingService {

    // todo pagination
    // todo loop of properties

    public function search(HouseSearchingRequestDTO $searchingRequestDto) {
        $house  = House::whereRaw("1=1");

        if ($searchingRequestDto->name) {
            $house->where("name", "LIKE", "%$searchingRequestDto->name%");
        }

        if ($searchingRequestDto->price) {
            $price = explode(":", $searchingRequestDto->price);
            $house->whereBetween('price', [$price[0], $price[1]]);
        }

        if ($searchingRequestDto->bathrooms) {
            $house->where("bathrooms", $searchingRequestDto->bathrooms);
        }

        if ($searchingRequestDto->bedrooms) {
            $house->where("bedrooms", $searchingRequestDto->bedrooms);
        }

        if ($searchingRequestDto->storeys) {
            $house->where("storeys", $searchingRequestDto->storeys);
        }

        if ($searchingRequestDto->garages) {
            $house->where("garages", $searchingRequestDto->garages);
        }

        return $house->get(['name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'])->toArray();
    }

}
