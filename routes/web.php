<?php


Route::get('/', function () {
    return view('welcome');
});

//Route::get('list','User2Controller@index');//fetch data from database eloquent model

/* for insert data in database*/
Route::view('insertview','insertview');
Route::POST('submit','CompaniesController@store');


Route::view('updateview','update');
Route::POST('updated','CompaniesController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
