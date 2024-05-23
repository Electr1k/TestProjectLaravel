<?php

namespace App\Services\City;

use App\Models\City;

class Service
{
    function store(array $data){
        return City::firstOrCreate($data);
    }

    function destroy(City $city): ?bool
    {
        return $city->delete();
    }
}
