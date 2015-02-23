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

/* Route::get('/', 'WelcomeController@index');  original facade showed inspiring quotes

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

/*Route::get('/', function()
{
   return View::make('welcome');
});
*/

Route::get('/', 'WelcomeController@home');
Route::get('/about', 'WelcomeController@about');



