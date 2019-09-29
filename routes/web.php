<?php


Route::get('/', function () {
    return view('welcome');
});

//fetch data from database eloquent model
Route::get('list','User2Controller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
