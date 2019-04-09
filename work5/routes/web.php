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
Route::get('/', 'IndexController@participantsData');
Route::get('/create', 'IndexController@create');
Route::get('/update', 'IndexController@update');
Route::post('/store','IndexController@store');
Route::post('/modify','IndexController@modify');
Route::post('/destroy','IndexController@destroy');
