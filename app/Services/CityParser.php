<?php

namespace App\Services;

use App\Models\City;
use Illuminate\Support\Facades\Http;

class CityParser
{
    public function parseCities()
    {
        $response = Http::get('https://api.hh.ru/areas');

        if ($response->successful()) {
            foreach ($response[0]['areas'] as $region) {
                foreach ($region['areas'] as $city) {
                    City::firstOrCreate([
                        'name' => $city['name'],
                    ]);
                }
            }
        }
    }
}
