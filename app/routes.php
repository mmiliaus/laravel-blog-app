<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('post', 'PostController');


Route::get('users/login', ['uses' => 'UsersController@login']);
Route::post('users/signin', ['uses' => 'UsersController@signin']);
Route::get('users/logout', ['uses' => 'UsersController@logout']);
Route::resource('users', 'UsersController');

Route::get('/', ['uses' => 'HomeController@index']);

