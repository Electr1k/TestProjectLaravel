<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Services\CityParser;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request){
        $current_city = $request->session()->get('current_city');
        if(!empty($current_city)){
            return redirect()->route('city.index', $current_city);
        }

        $cities = City::all();
        if (empty($cities)){
            $parser = new CityParser();
            $parser->parseCities();
            $cities = City::all();
        }
        return view('main.index', compact('cities'));
    }
}
