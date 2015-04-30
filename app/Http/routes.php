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

Route::get('/', 'WelcomeController@index');
Route::get('contato', 'PagesController@contato');

Route::get('artigos', 'ArtigosController@index');
Route::get('artigos/inserir', 'ArtigosController@create');
Route::get('artigos/{id}', 'ArtigosController@show');
Route::post('artigos', 'ArtigosController@store');

Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
