<?php


Route::get('/', function () {
    return view('welcome');
});

Route::view('/form','userform');
Route::POST('upload','UsersController@index');