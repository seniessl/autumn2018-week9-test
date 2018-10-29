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

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/hero', 'HeroController@index');

Route::get('/hero/{slug}', 'HeroController@show');

Route::post('/hero/{slug}', 'HeroController@store');

Auth::routes();
