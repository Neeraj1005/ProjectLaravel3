<?php


Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('welcome');
});


Route::view('user','user');
Route::view('company','company');