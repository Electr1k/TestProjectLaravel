<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', IndexController::class)->name('main');

Route::group(['prefix' => '{city}'], function () {
    Route::group(['namespace' => 'App\Http\Controllers\City'], function () {
        Route::get('/',  'IndexController')->name('city');
    });
    Route::group(['namespace' => 'App\Http\Controllers\News'], function () {
        Route::get('/news', 'IndexController')->name('news');
    });
    Route::group(['namespace' => 'App\Http\Controllers\AboutUs'], function () {
        Route::get('/aboutUs', 'IndexController')->name('about');
    });
});

