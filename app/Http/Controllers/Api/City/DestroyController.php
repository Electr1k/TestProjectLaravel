<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Requests\City\StoreRequest;
use App\Http\Resources\City\CityResource;
use App\Models\City;

class DestroyController extends CityController
{
    public function __invoke(City $city){
        return $this->service->destroy($city);
    }
}
