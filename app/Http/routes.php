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
Route::get('/', 'HomeController@index');
Route::get('/o_nama', 'HomeController@about');
Route::get('/klubovi', 'HomeController@clubs');
Route::get('/treneri', 'HomeController@coaches');
Route::get('/kontakt', 'HomeController@contact');

Route::resource('/about', 'AboutController');
Route::resource('/contact', 'ContactController');
Route::resource('/events', 'EventsController');
Route::resource('/clubs', 'ClubsController');
Route::resource('/coaches', 'CoachesController');
