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


Route::get('/', 'PropertyController@home')->name('home');
Route::get('/properties', 'PropertyController@index')->name('properties.index');
Route::get('/properties/{property}', 'PropertyController@show')->name('properties.show');

//Route::get('/', function () {
  //  return view('home');
//});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/show', function () {
    return view('property.show');
});

Route::get('/index', function () {
    return view('index');
});
