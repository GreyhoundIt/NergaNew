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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/zone', function () {
    return view('zone');
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/rules', 'HomeController@rules');
Route::get('/honours', 'HomeController@honours');
Route::get('/sponsors', 'HomeController@sponsors');