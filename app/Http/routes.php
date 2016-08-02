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

Route::get('/', 'HomeController@index');


Route::auth();
Route::get('/register', 'HomeController@index');

Route::get('/home', 'HomeController@index');


Route::get('/staff', 'UsersController@index');
Route::post('/staff/create', 'UsersController@register');
Route::post('/staff/create', 'UsersController@save');
Route::get('/profile', 'UsersController@profile');

Route::get('/departments', 'DepartmentsController@index');
Route::get('/departments/create', 'DepartmentsController@register');
Route::post('/departments/create', 'DepartmentsController@save');

Route::get('/documentation', 'DocumentationController@index');
Route::get('/documentation/create', 'DocumentationController@register');
Route::post('/documentation/create', 'DocumentationController@register');

Route::get('/tools', 'ToolsController@index');
Route::get('/tools/create', 'ToolsController@register');
Route::post('/tools/create', 'ToolsController@register');
