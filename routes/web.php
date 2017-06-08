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

Route::get('coba','CobaController@tesdt');
Route::get('coba2/{id}','CobaController@test2');
Route::get('test','CobaController@test3');
Route::get('test2','CobaController@percobaan');
Route::get('prakerin/{data}','CobaController@test');

