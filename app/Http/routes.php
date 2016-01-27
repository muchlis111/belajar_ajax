<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('partials.home');
});


Route::get('pengunjung', 'pengunjungController@index');
Route::get('pengunjung/{id}', 'pengunjungController@show');
Route::post('pengunjung', 'PengunjungController@store');
Route::put('update-pengunjung/{id}', 'PengunjungController@update');
Route::get('hapus-pengunjung/{id}', 'PengunjungController@destroy');
Route::get('edit-pengunjung/{id}', 'PengunjungController@edit');




