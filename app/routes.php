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
//funciona con funcion anonima
/*Route::get('funciona', function()
{
	return 'funciona!!';
});

Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::resource('/', 'PostController');


Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');
