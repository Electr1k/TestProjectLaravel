<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Services\CityParser;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request){
        $current_city = $request->session()->get('current_city');

        return view('news.index', compact('current_city'));
    }
}
