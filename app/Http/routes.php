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

Route::get('/create-pengunjung', function () {
    return view('partials.pengunjung.create');
});
Route::get('/create-kamar', function () {
    return view('partials.kamar.create');
});

Route::get('pengunjung', 'pengunjungController@index');
Route::get('pengunjung/{id}', 'pengunjungController@show');
Route::post('pengunjung', 'pengunjungController@store');
Route::put('update-pengunjung/{id}', 'pengunjungController@update');
Route::get('hapus-pengunjung/{id}', 'pengunjungController@destroy');
Route::get('edit-pengunjung/{id}', 'pengunjungController@edit');
Route::get('data-pengunjung', 'pengunjungController@getData');;



Route::get('kamar', 'kamarController@index');
Route::get('kamar/{id}', 'kamarController@show');
Route::post('kamar', 'KamarController@store');
Route::put('update-kamar/{id}', 'KamarController@update');
Route::get('hapus-kamar/{id}', 'KamarController@destroy');
Route::get('edit-kamar/{id}', 'KamarController@edit');
Route::get('data-kamar', 'KamarController@getData');



