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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/','PostController'); 
Route::get('/create','PostController@create')->middleware('auth');
Route::post('/store','PostController@store')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
