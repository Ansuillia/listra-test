<?php

use Illuminate\Http\Request;

Route::namespace('Api')->name('api.')->middleware('cors')->group(function() {
    Route::prefix('cars')->group(function() {
        Route::get('/', 'CarsController@index');
    });
});
