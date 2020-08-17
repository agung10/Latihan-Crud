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

/*Route::get('/home/{nama?}', function($nama="Kosong")
{
	echo "Hello ".$nama;
});*/

Route::get('/profile/{nama?}', 'HomeController@profile');

Route::get('/direct-profile', 'HomeController@profileview');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('siswa')->group(function (){
Route::get('/', 'SiswaController@index');
Route::get('/add', 'SiswaController@add');
Route::get('/edit/{id}', 'SiswaController@edit');
Route::post('/save', 'SiswaController@save');
Route::get('/count_jurusan/{jurusan_id}', 'SiswaController@countJurusan');
Route::post('/update/{id}', 'SiswaController@update');
Route::get('/delete/{id}', 'SiswaController@delete');
Route::get('/all', 'SiswaController@index');
Route::get('/min_count_jurusan/{id}/{jurusan_id}', 'SiswaController@minCountJurusan');
});

Route::prefix('kelas')->group(function (){
Route::get('/', 'KelasController@index');
Route::get('/add', 'KelasController@add');
Route::post('/save', 'KelasController@save');
Route::get('/edit/{id}', 'KelasController@edit');
Route::post('/update/{id}', 'KelasController@update');
Route::get('/delete/{id}', 'KelasController@delete');
});

Route::prefix('jurusan')->group(function (){
Route::get('/', 'JurusanController@index');
Route::get('/add', 'JurusanController@add');
Route::post('/save', 'JurusanController@save');
Route::get('/edit/{id}', 'JurusanController@edit');
Route::post('/update/{id}', 'JurusanController@update');
Route::get('/delete/{id}', 'JurusanController@delete');
});