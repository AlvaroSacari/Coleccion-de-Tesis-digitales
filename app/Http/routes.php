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

/*
|
| se encuentra disposición el panel de administrador en la ruta '/home'
| Alvaro S.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('invitado', 'InvitadoController@index');
Route::get('invitado/publicar', 'InvitadoController@publicar');

Route::resource('invitado', 'InvitadoController');
Route::resource('tesis', 'TesisController');
Route::resource('home', 'HomeController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
