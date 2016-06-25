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

Route::get('/add', 'PersonController@add_view');

Route::get('/', 'PersonController@index', array( 'title' => 'Homepage' ) );

Route::post('/add', 'PersonController@add');

Route::get('/delete/{id}', 'PersonController@delete');

Route::get('/update/{id}', 'PersonController@update_view');

Route::post('/update', 'PersonController@update');