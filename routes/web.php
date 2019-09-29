<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('db','UserController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
