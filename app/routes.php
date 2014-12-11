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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/customers', 'HomeController@showCustomers');
Route::get('/hello', 'HomeController@showWelcome');
Route::get('/registernewcustomer','HomeController@showRegistration');
Route::get('/jun','HomeController@showLogin');
Route::get('/home','HomeController@showHome');


Route::post('/jun','HomeController@InsertSignup');
Route::post('/login','HomeController@Login');
Route::post('/registernewcustomer','HomeController@InsertCustomer');

