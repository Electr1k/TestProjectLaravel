<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Requests\City\StoreRequest;
use App\Http\Resources\City\CityResource;

class StoreController extends CityController
{
    public function __invoke(StoreRequest $request): CityResource
    {
        $data = $request->validated();
        $city = $this->service->store($data);
        return new CityResource($city);
    }
}
