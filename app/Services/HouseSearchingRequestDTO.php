<?php

namespace App\Services;

use Illuminate\Http\Request;

class HouseSearchingRequestDTO {

    public string $name = '';
    public string  $price = '0.0';
    public int $bedrooms = 0;
    public int $bathrooms = 0;
    public int $storeys = 0;
    public int $garages = 0;

    public function fromRequest(Request $request) {
        $this->name = $request->get('name', '');
        $this->price = $request->get('price', '0.0');
        $this->bedrooms = $request->get('bedrooms', 0);
        $this->bathrooms = $request->get('bathrooms', 0);
        $this->storeys = $request->get('storeys', 0);
        $this->garages = $request->get('garages', 0);
        return $this;
    }
}
