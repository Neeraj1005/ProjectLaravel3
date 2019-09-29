<?php


Route::get('/', function () {
    return view('welcome');
});


Route::view('user','user');
Route::view('company','company');