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

Route::get('/show','articleController@show');
Route::get('/add','articleController@addarticle');
//Route::get('/show/edit/{id}','articleController@deletearticle');
Route::post('/addsave','articleController@saveadd');
Route::get('/show/deletes/{id}','articleController@delete');
Route::get('/show/edit/{id}','articleController@update');
Route::post('/show/edit/{id}','articleController@updatedata');
