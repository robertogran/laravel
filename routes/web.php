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
    /* $pdf = PDF::loadview('welcome');
    return $pdf->stream(); */
});

Route::resource('superheroes','SuperheroeController');

Route::get('superheroes.show','SuperheroeController@show');