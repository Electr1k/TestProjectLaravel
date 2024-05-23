<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Web'], function () {

    Route::get('/', 'Main\IndexController')->name('main');

    Route::group(['prefix' => '/{city}'], function () {
        Route::group(['namespace' => 'City'], function () {
            Route::get('/',  'IndexController')->name('city');
        });
        Route::group(['namespace' => 'News'], function () {
            Route::get('/news', 'IndexController')->name('news');
        });
        Route::group(['namespace' => 'AboutUs'], function () {
            Route::get('/aboutUs', 'IndexController')->name('about');
        });
    });
});
