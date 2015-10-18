<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('login','UserController@loginUser');
Route::post('index','UserController@index');
Route::get('cadastro','UserController@cadastro');
Route::post('create','UserController@create');
Route::get('show','UserController@show');
Route::get('edit/{id}', 'UserController@edit');
Route::post('update','UserController@update');
