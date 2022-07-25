<?php

namespace App\Http\Controllers\API;

use App\Services\HouseSearchingRequestDTO;
use App\Services\HouseSearchingService;
use Illuminate\Http\Request;

class HouseController {

    public function index(Request $request, HouseSearchingService $houseSearchingService)
    {
        $houseSearchingRequestDTO = (new HouseSearchingRequestDTO())->fromRequest($request);
        $result = $houseSearchingService->search($houseSearchingRequestDTO);
        return response()->json($result);
    }

}
