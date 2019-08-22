<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['namespace' => 'Frontend'], function () {
    //safra api integration
        Route::post('search_hotel', 'SafraController@searchHotel');
        Route::get('/', 'SafraController@index');
        Route::get('/get_cities/{city_id}', 'SafraController@getCitiesFromDB');
        
         Route::get('hotels/{id}', 'SafraController@getHotels');
          Route::get('hotels/details/{id}', 'SafraController@getHotelDetails');
       Route::post('search_for_hotels', 'SafraController@searchForHotelsWeb');
      Route::get('reservations', 'SafraController@getReservations');
      Route::post('search_hotel_by_name', 'SafraController@searchHotelByName');
     //});
});