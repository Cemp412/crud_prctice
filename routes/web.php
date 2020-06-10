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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'CrudController@create');
Route::get('/crud', 'CrudController@index');
Route::post('/crud', 'CrudController@insert');
Route::get('/crud/show/{id}', 'CrudController@show');
Route::get('/crud/{id}/edit', 'CrudController@edit');
Route::post('/crud/update', 'CrudController@update');
Route::get('/curds/delete/{id}','CrudController@delete');