<?php

use Illuminate\Support\Facades\Route;

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


Route::get('labas', function () {
    return 'Pats tu Labas';
});


Route::get('miskas/gyvena/{zveris}/{zveris2}', 'MiskasController@index');

Route::get('giria', 'MiskasController@index66');


Route::get('suma/{zveris}/{zveris2}', 'MiskasController@suma');


Route::get('sumatorius', 'MiskasController@showForm');

Route::post('do', 'MiskasController@sum')->name('do.math');

///ZVERYS

Route::get('zverys/create', 'ZverisController@create')->name('zveris.create'); // rodo tuscia forma
Route::post('zverys/store', 'ZverisController@store')->name('zveris.store');