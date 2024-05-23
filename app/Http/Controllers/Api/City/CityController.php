<?php

namespace App\Http\Controllers\Api\City;

use App\Http\Controllers\Controller;
use App\Services\City\Service;

class CityController extends Controller
{

    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
