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

//Route::get('coba','CobaController@tesdt');
//Route::get('coba2/{nama}','CobaController@test2');
// //Route::get('index/{id}','CobaController@test4');
// Route::get('test2','CobaController@percobaan');
// Route::get('{data}','CobaController@dunia');

Route::resource('post','PostController');

