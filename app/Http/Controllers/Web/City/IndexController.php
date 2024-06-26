<?php

namespace App\Http\Controllers\Web\City;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request){
        $current_city = $request->city;
        $request->session()->put('current_city', $current_city);
        $cities = City::all();
        return view('city.index', compact('cities',"current_city" ));
    }
}
