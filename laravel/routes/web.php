<?php

use Illuminate\Support\Facades\Route;
#mengimport HomeController di web route
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

#to access this, from default link, add /hello
Route::get('/hello', [HomeController::class,'index']);
#Route::get('/hello', [HomeController::class,'index2']);

Route::get('/hello2', function () {
    return "Hello Fandil";
});