<?php

namespace App\Http\Controllers\Web\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request){
        $current_city = $request->session()->get('current_city');
        return view('about_us.index', compact('current_city'));
    }
}
