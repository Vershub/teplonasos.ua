<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', 'UserController@reg');
Route::post('/done', 'UserController@done');

Route::get('/id{id?}', 'UserController@index');

Route::get('/tasks', 'TasksController@index');
Route::get('/plusc/{id}', 'CountersController@index');
Route::get('/queue', 'QueueController@index');
Route::get('/accept/{id}', 'QueueController@accept');


Route::get('/places', 'PlacesController@index');
Route::post('/places/create', 'PlacesCreateController@index');
Route::get('places/add', 'PlacesFormController@index');
Route::get('places/{id}/', 'PlacesShowController@index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
