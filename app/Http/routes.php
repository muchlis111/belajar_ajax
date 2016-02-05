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

    Route::get('/create-lama_hari', function () {
        return view('partials.lama_hari.create');
    });

Route::get('pengunjung', 'PengunjungController@index');

Route::get('pengunjung/{id}', 'PengunjungController@show');
Route::delete('pengunjung/{id}', 'PengunjungController@destroy');

Route::post('pengunjung', 'pengunjungController@store');

Route::put('pengunjung/{id}', 'pengunjungController@update');

Route::get('hapus-pengunjung/{id}', 'pengunjungController@destroy');
Route::get('edit-pengunjung/{id}', 'pengunjungController@edit');
Route::get('data-pengunjung', 'pengunjungController@getData');



Route::get('kamar', 'kamarController@index');
Route::get('kamar/{id}', 'kamarController@show');
Route::delete('kamar/{id}', 'KamarController@destroy');
Route::post('kamar', 'KamarController@store');
Route::put('kamar/{id}', 'KamarController@update');
Route::get('hapus-kamar/{id}', 'KamarController@destroy');
Route::get('edit-kamar/{id}', 'KamarController@edit');
Route::get('data-kamar', 'KamarController@getData');

Route::get('lama_hari', 'lama_hariController@index');
Route::get('lama_hari/{id}', 'lama_hariController@show');
Route::delete('lama_hari/{id}', 'Lama_hariController@destroy');
Route::post('lama_hari', 'Lama_hariController@store');
Route::put('lama_hari/{id}', 'Lama_hariController@update');
Route::get('hapus-lama_hari/{id}', 'Lama_hariController@destroy');
Route::get('edit-lama_hari/{id}', 'Lama_hariController@edit');
Route::get('data-lama_hari', 'Lama_hariController@getData');



