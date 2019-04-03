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

Route::get('/', 'IndexController@getIndex');
Route::get('/greeting', 'IndexController@greeting');
Route::post('/greeting_ok', 'IndexController@greeting_ok');


//Route::get('/', function () {
//    return view('welcome1');
//});
