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

Route::post('/products/create', 'ProductsController@store');
Route::post('/samplings/create', 'SamplingsController@store');
Route::get('/samplings/show/{productId}', 'SamplingsController@show');

//Webpages
Route::get('/', 'WelcomeController@index');
Route::get('/register', 'WelcomeController@register');
Route::get('/reset', 'WelcomeController@resetpassword');
Route::get('/UserAuth', 'WelcomeController@UserAuth');
Route::get('/about', 'WelcomeController@about');

Route::auth();
Route::get('/home', 'HomeController@home');	
Route::get('/profile', 'HomeController@profile');
Route::get('/products', 'HomeController@products');
Route::get('/measurements', 'HomeController@measurements');	
Route::get('auth/logout', 'Auth\AuthController@getLogout');	









