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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pertanyaans','PertanyaanController');
Route::resource('jawabans','JawabanController');

Route::get('/pertanyaan', 'PertanyaanController@indexx');
Route::get('/jawaban', 'JawabanController@index');

Route::get('/profil/{user}', 'ProfilController@index')->name('profil');
