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
    return view('daftarProyek');
});

Route::get('/proyek', 'ProyekController@index'); // menampilkan semua
Route::post('/proyek', 'ProyekController@store'); // menyimpan data
Route::get('/proyek/create', 'ProyekController@create'); // menampilkan halaman form
//Route::get('/proyek/{id}', 'ProyekController@show'); // menampilkan detail item dengan id 

Route::get('/proyek/{id}/daftarkan-staff', 'ProyekController@form_staff'); 
Route::post('/proyek/{id}/daftarkan-staff', 'ProyekController@add_staff'); 
Route::get('/proyek/{id}/edit', 'ProyekController@edit'); // menampilkan form untuk edit item
Route::put('/proyek/{id}', 'ProyekController@update'); // menyimpan perubahan dari form edit
Route::delete('/proyek/{id}', 'ProyekController@destroy'); // menghapus data dengan id
