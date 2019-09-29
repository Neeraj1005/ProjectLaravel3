<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('list','User2Controller@index');//fetch data from database eloquent model

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
