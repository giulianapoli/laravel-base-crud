<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/booking', 'BookingController');

// Route::resource('/{id}', 'BookingController@show')->name('guestdetails');

// Route::resource('/create', 'BookingController@create')->name('createuser');