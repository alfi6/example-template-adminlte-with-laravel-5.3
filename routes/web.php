<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'DashboardController@index');
Route::get('/index2', 'DashboardController@index2');
Route::get('/widgets', 'DashboardController@widgets');
Route::get('/simple', 'DashboardController@simple');
Route::get('/data', 'DashboardController@data');
Route::get('/calender', 'DashboardController@calender');