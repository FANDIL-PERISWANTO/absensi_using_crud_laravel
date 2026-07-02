<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#to access this, from default link, add /hello
Route::get('/hello', function () {
    return "Hello Fandil";
});