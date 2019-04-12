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
Route::get('/', 'indexController@index');
Route::get('/register','indexController@create');
Route::get('/detailPage','indexController@show');
Route::post('/store','indexController@store');
Route::get('/edit', 'indexController@edit');
Route::post('/update', 'indexController@update');
Route::post('/delete', 'indexController@delete');
Route::get('/search', 'indexController@search');
