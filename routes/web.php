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



Route::resource('properties', 'PropertyController');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () { 
    
    Route::get('/admin', 'HomeController@admin');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();
