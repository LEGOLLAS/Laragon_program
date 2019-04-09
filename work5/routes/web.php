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
Route::get('/join', 'IndexController@joinInput');
Route::post('/joinOutput', 'IndexController@joinOutput');
Route::get('/team', 'IndexController@showTeam');
Route::get('/', 'IndexController@index');
Route::get('/create', 'IndexController@create');
Route::get('/info','IndexController@show');
Route::get('/edit', 'IndexController@edit');
Route::post('/store','IndexController@store');
Route::post('/update','IndexController@update');
Route::post('/delete','IndexController@delete');
Route::get('/search'.'IndexController@search');
