<?php

namespace App\Http\Controllers\Web\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(){
        $current_city = "da";//$request->session()->get('current_city');

        return view('news.index', compact('current_city'));
    }
}
