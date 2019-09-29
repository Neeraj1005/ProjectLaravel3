<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('list','UserController@index');

//fetch data from table using created model and controller
Route::get('db','User1Controller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
