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
Route::get('nama','PrakerinController@nama');
Route::get('minuman','PrakerinController@minuman');
Route::get('makanan','PrakerinController@makanan');
Route::get('tahun','PrakerinController@tahun');
Route::get('bulan','PrakerinController@bulan');
Route::get('/{a}','PrakerinController@param');
