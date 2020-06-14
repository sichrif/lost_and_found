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

Auth::routes();

Route::get('home','HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']],function(){
    Route::get('/dashboard','PostController@index');
    Route::delete('/postdelete/{id}','PostController@destroy');
    Route::put('/post-update/{id}','PostController@update');
    Route::get('/post-edit/{id}','PostController@edit');

    Route::get('Aregister','Admin\DashboardController@registred');
    Route::get('/edit/{id}','Admin\DashboardController@registrededit');
    Route::delete('/delete/{id}','Admin\DashboardController@registredelete');
    Route::get('/create','Admin\DashboardController@createe');

    Route::put('/register-update/{id}','Admin\DashboardController@registreupdate');
   
    Route::put('/register-create','Admin\DashboardController@registrecreate');

 

});
////////////////
Route::group(['middleware' => ['auth', 'Finder']],function(){
    Route::get('/Finder', function(){
        return view('Finders.Finders');
    });
    });
    //////////////////
   