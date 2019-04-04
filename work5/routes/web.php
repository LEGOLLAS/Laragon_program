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

Route::get('/', 'IndexController@introduce');
Route::get('/join', 'IndexController@join_input');
Route::post('/join_output', 'IndexController@join_output');
Route::get('/team', 'IndexController@show_team');
