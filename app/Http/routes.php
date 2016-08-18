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

Route::get('/', 'HomeController@index')->name('/');

Route::auth();
Route::get('/register', 'HomeController@index')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/staff', 'UsersController@index')->name('staff.index');
Route::get('/staff/create', 'UsersController@register')->name('staff.register');
Route::post('/staff/save', 'UsersController@save')->name('staff.store');

Route::get('/profile', 'ProfileController@Index')->name('profile');
Route::post('/profile/update/password', 'ProfileController@updatePassword')->name('profile.password');

Route::get('/departments', 'DepartmentsController@index')->name('departments');
Route::get('/departments/create', 'DepartmentsController@register')->name('departments.register');
Route::get('/dpartments/edit/{id}', 'DepartmentsController@edit')->name('departments.edit');
Route::get('/departments/destroy/{id}', 'DepartmentsController@destroy')->name('departments.destroy');
Route::post('/departments/create', 'DepartmentsController@save')->name('departments.store');
Route::post('/departments/update/{id}', 'DepartmentsController@update')->name('departments.update');

Route::get('/documentation', 'DocumentationController@index')->name('docs.index');
Route::get('/documentation/list/{id}', 'DocumentationController@listing')->name('docs.list');
Route::get('/documentation/create', 'DocumentationController@register')->name('docs.register');
Route::post('/documentation/create', 'DocumentationController@store')->name('docs.store');

Route::get('/tools', 'ToolsController@index')->name('tools');
Route::get('/tools/register', 'ToolsController@register')->name('tooles.register');
Route::post('/tools/save', 'ToolsController@save')->name('tools.store');
