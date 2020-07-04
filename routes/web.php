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
Route::get('/items', 'ItemController@index'); // menampilkan halaman form
Route::get('/items/create', 'ItemController@create'); //menyimpan data
Route::post('/items','ItemController@store'); //menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); //menampilkan detail item dengan id
Route::get('/items/{id}/edit','ItemController@edit'); //menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); //menyimpan perubahan form edit
Route::delete('/items/{id}', 'ItemController@destroy'); //menghapus data