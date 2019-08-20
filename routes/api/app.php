<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(array('middleware' => $middleware), function () use ($namePrefix) {
   

//safra api integration
    Route::namespace('Api')->prefix('hotels')->group(function () {
        Route::get('reservations', 'SafraController@getReservations');
        Route::post('book', 'SafraController@bookHotel');
        Route::post('cancel_book', 'SafraController@cancelBooking');
        Route::get('/', 'SafraController@searchForHotel');
        Route::post('/', 'SafraController@searchForHotePost');
        Route::post('search_for_hotels', 'SafraController@searchForHotels');
         Route::get('reservations', 'SafraController@getReservations');
     });
     Route::namespace('Api')->prefix('static-data')->group(function () {
        Route::get('cities', 'SafraController@getCities');
         Route::get('get_hotels', 'SafraController@getHotels');
     });
});

