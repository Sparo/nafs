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

Route::resource('/about', 'AboutController');
Route::resource('/contact', 'ContactController');
Route::resource('/events', 'EventsController');
Route::resource('/clubs', 'ClubsController');
Route::resource('/coaches', 'CoachesController');
