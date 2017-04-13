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

Route::get('messages','MessageController@index');
Route::post('message','MessageController@store');
Route::delete('message/{message}','MessageController@destroy');
Route::get('messages/{message}','MessageController@show');
Route::get('messages/{message}/edit','MessageController@edit');
Route::patch('messages/{message}','MessageController@update');


