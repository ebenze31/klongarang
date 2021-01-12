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
Route::get('aboutcommu', function () {
    return view('About/aboutcommu');
});
Route::get('wangree', function () {
    return view('About/wangree');
});
Route::get('meeting', function () {
    return view('About/meeting');
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
	Route::resource('review', 'ReviewController');

});

Route::resource('travel', 'TravelController')->except(['create' , 'edit']);
Route::resource('products', 'ProductsController')->except(['create' , 'edit']);
Route::resource('homestay', 'HomestayController')->except(['create' , 'edit' , 'show']);
Route::resource('trip', 'TripController')->except(['create' , 'edit' ]);
Route::resource('award', 'AwardController')->except(['create' , 'edit', 'show' , 'show' ]);
Route::resource('community', 'CommunityController')->except(['create' , 'edit' , 'show']);
Route::resource('review', 'ReviewController');

// Facebook login
Route::get('login/facebook','Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback','Auth\LoginController@handleFacebookCallback');