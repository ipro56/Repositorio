<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('hotel','HotelController');

Route::get('/', 'HotelController@index');

Route::resource('booking','BookingController');

Route::resource('user','UserController');


