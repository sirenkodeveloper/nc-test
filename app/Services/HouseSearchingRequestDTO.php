<?php

namespace App\Services;

use Illuminate\Http\Request;

class HouseSearchingRequestDTO {

    public ?string $name = '';
    public ?string  $price = '';
    public ?int $bedrooms = null;
    public ?int $bathrooms = null;
    public ?int $storeys = null;
    public ?int $garages = null;

    public function fromRequest(Request $request) {
        $this->name = $request->get('name', '');
        $this->price = $request->get('price', '');
        $this->bedrooms = $request->get('bedrooms');
        $this->bathrooms = $request->get('bathrooms');
        $this->storeys = $request->get('storeys');
        $this->garages = $request->get('garages');
        return $this;
    }
}
