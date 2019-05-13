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

Route::get('formulir', function () {
    return view('formulir');
});

Route::get('about', function () {
    return view('about');
});


Route::get('contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/formulir/daftar', 'formulirController@proses');

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){

	Route::resource('/', 'AdminController');
});

