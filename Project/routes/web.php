<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/contact', 'ContactController@index');
Route::post('/contact/sendmail', 'ContactController@sendMail');

Route::get('/browse', 'BrowseController@index');
Route::get('/browse/game/{id}', 'BrowseController@showGame');
Route::get('/browse/game/contact/{id}', 'BrowseController@contactOwner');
Route::post('/browse/game/contact/sendmail/{id}' , 'BrowseController@sendMail');

Route::get('/account/{id}', 'AccountController@index');
Route::get('/account/{id}/edit', 'AccountController@edit');
Route::post('/account/{id}/update', 'AccountController@update');
Route::get('/account/addGame/{id}', 'AccountController@addGame');
Route::post('/account/{id}/addGame/store', 'AccountController@storeGame');

Route::delete('/account/delete/{game}', 'AccountController@deleteGame');
Route::delete('/admin/users/delete/{user}', 'AdminController@deleteUser');
Route::delete('/admin/games/delete/{game}', 'AdminController@deleteGame');

Route::get('/profile/{id}', 'ProfileController@index');
Route::post('/profile/{id}/addComment', 'ProfileController@addComment');
Route::get('/test', 'ProfileController@tester');


Route::get('/admin', 'AdminController@index');
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/games', 'AdminController@games');

Route::post('/browse/search', 'BrowseController@search');

Route::resource('/browse/filter', 'BrowseController@filter');