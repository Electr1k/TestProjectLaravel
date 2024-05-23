<?php

use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Controllers\City\IndexController as CityIndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', MainIndexController::class)->name('main.index');

Route::get('/{city}', CityIndexController::class)->name('city.index');
