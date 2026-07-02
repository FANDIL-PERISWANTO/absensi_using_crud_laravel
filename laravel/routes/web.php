<?php

use Illuminate\Support\Facades\Route;
#mengimport HomeController di web route
use app\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

#to access this, from default link, add /hello
Route::get('/hello', function () {
    return "Hello Fandil";
});