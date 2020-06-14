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

/****************POSTS ROUTES ********/

Route::get('/show','PostController@index')->name('show'); 
Route::get('/create','PostController@create')->middleware('auth');

Route::post('/store','PostController@store')->middleware('auth');

Route::get('/show_more/{post}','PostController@show')->middleware('auth');

Route::get('/{post}/edit','PostController@edit')->middleware('auth');

//Route::put('/update/{post}','PostController@update')->middleware('auth
Route::patch('/update/{post}','PostController@update')->middleware('auth');
Route::delete('/delete/{post}','PostController@destroy')->middleware('auth');

Auth::routes();



/******USER ROUTES ********/


Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'AppController@home')->name('home');
    Route::get('user/calendar', 'UserController@calendar')->name('user.calendar');
    Route::get('user/calendar', 'UserController@contactList')->name('user.contact-list');

    Route::resource('/user', 'UserController');
    
    Route::resource('/home', 'UserController');
    Route::get('/{users}/edit_user', 'UserController@edit');
   Route::patch('/update_user/{users}', 'UserController@update');


   /******** Pages Navbar ********/
Route::get('pages', function () { return redirect('pages/blank-page'); });
Route::get('pages/blank', 'PagesController@blank')->name('pages.blank');
Route::get('pages/gallery', 'PagesController@gallery')->name('pages.gallery');
Route::get('pages/invoices1', 'PagesController@invoices1')->name('pages.invoices1');
Route::get('pages/invoices2', 'PagesController@invoices2')->name('pages.invoices2');
Route::get('pages/pricing', 'PagesController@pricing')->name('pages.pricing');
Route::get('pages/profile', 'PagesController@profile')->name('pages.profile');
Route::get('pages/search', 'PagesController@search')->name('pages.search');
Route::get('pages/timeline', 'PagesController@timeline')->name('pages.timeline');
    
   
    
});

/*Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
  ]);
  Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
  ]);
  Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
  ]);
  
  // Password Reset Routes...
  Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
  ]);
  Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
  ]);
  Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
  ]);
  Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
  ]);
  
  // Registration Routes...
  Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
  ]);
  Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
  ]);*/

Route::get('/', 'HomeController@index')->name('home');
