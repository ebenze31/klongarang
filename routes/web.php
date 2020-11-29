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

Route::get('travel_pool', function () {
    return view('travel/สระหลวง');
});

Route::get('all_goods', function () {
    return view('goods/all');
});


Auth::routes();


Route::middleware(['auth', 'role:คนดูแล'])->group(function () {

	Route::resource('travel', 'TravelController');
	Route::resource('products', 'ProductsController');

});

Route::resource('travel', 'TravelController')->except(['create' , 'edit']);
Route::resource('products', 'ProductsController')->except(['create' , 'edit']);