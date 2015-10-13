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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/applications', 'ApplicationController@index');
//Route::post('/applications', 'ApplicationController@store');
//Route::post('/application/create', 'ApplicationController@create');
//Route::delete('/application/{application}', 'ApplicationController@destroy');
//Route::get('/application/{application}', 'ApplicationController@show');
//Route::put('/application/{application}', 'ApplicationController@update');
//Route::get('/application/{application}/edit', 'ApplicationController@edit');

Route::resource('/applications', 'ApplicationController');

Route::resource('/authors', 'AuthorController');