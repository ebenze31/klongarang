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

Route::get('/', function () {
    return view('home');
});
Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('About/about');
});



Auth::routes();


Route::middleware(['auth', 'role:คนดูแล'])->group(function () {

	Route::resource('travel', 'TravelController');
	Route::resource('products', 'ProductsController');
	Route::resource('homestay', 'HomestayController');
	Route::resource('advertise', 'AdvertiseController');
	Route::resource('award', 'AwardController');
	Route::resource('trip', 'TripController');
	Route::resource('community', 'CommunityController');

});

Route::resource('travel', 'TravelController')->except(['create' , 'edit']);
Route::resource('products', 'ProductsController')->except(['create' , 'edit']);
Route::resource('homestay', 'HomestayController')->except(['create' , 'edit' , 'show']);
Route::resource('trip', 'TripController')->except(['create' , 'edit' ]);
Route::resource('award', 'AwardController')->except(['create' , 'edit', 'show' , 'show' ]);
Route::resource('community', 'CommunityController')->except(['create' , 'edit' , 'show']);