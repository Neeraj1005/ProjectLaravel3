<?php


Route::get('/', function () {
    return view('welcome');
});

//Route::get('list','User2Controller@index');//fetch data from database eloquent model

Route::view('insertview','insertview');
Route::POST('submit','CompaniesController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
