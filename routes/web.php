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

Route::get('/show','PostController@index'); 
Route::get('/create','PostController@create')->middleware('auth');

Route::post('/store','PostController@store')->middleware('auth');

Route::get('/show_more/{post}','PostController@show')->middleware('auth');

Route::get('/{post}/edit','PostController@edit')->middleware('auth');

//Route::put('/update/{post}','PostController@update')->middleware('auth
Route::patch('/update/{post}','PostController@update');
Route::delete('/delete/{post}','PostController@destroy')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
