<?php

use Illuminate\Support\Facades\Route;
use Creativesyntax\Contactus\Http\Controllers\ContactusController;

Route::group(['namespace' => 'Creativesyntax\Contactus\Http\Controllers'], function () {
    Route::name('contactus.')->group(function () {
        Route::get('contact-us', 'ContactusController@index')->name('index');
        Route::post('contact-us', 'ContactusController@save')->name('save');
    });
});
