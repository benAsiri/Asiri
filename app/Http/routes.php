<?php

Route::get('contact','PagesController@contact');
ROute::get('about','PagesController@about');


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

//get mean it visit the web page------> it loads another method.
// yooo this mean the Root of this Website ----> /




Route::get('/', 'PagesController@contact');
/*
Route::get('contact','WelcomeController@contact');

Route::get('Home', 'HomeController@home');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',


]);
*/

