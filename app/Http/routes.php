<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

// Site routes
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/novosti', 'HomeController@index');

Route::get('/about', 'HomeController@about');
Route::get('/o_nama', 'HomeController@about');

Route::get('/clubs', 'HomeController@clubs');
Route::get('/klubovi', 'HomeController@clubs');

Route::get('/coaches', 'HomeController@coaches');
Route::get('/treneri', 'HomeController@coaches');

Route::get('/contact', 'HomeController@contact');
Route::get('/kontakt', 'HomeController@contact');


Route::get('/events/{id}', 'EventsController@show');
Route::get('/novosti/{id}', 'EventsController@show');

Route::get('/clubs/{id}', 'ClubsController@show');
Route::get('/klubovi/{id}', 'ClubsController@show');

Route::get('/coaches/{id}', 'CoachesController@show');
Route::get('/treneri/{id}', 'CoachesController@show');

// CMS routes
Route::group(['prefix' => '@admin', 'middleware' => 'auth.basic'], function () {
    Route::get('/dashboard', 'HomeController@dashboard');
    Route::resource('/about', 'AboutController', ['except' => ['show']]);
    Route::resource('/contact', 'ContactController', ['except' => ['show']]);
    Route::resource('/events', 'EventsController', ['except' => ['show']]);
    Route::resource('/clubs', 'ClubsController', ['except' => ['show']]);
    Route::resource('/coaches', 'CoachesController', ['except' => ['show']]);
});
