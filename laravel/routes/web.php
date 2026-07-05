<!-- Halaman ini sebagai route dasar yang diakses di url browser secara default -->
<?php

use Illuminate\Support\Facades\Route;
#mengimport HomeController di web route
use App\Http\Controllers\HomeController;

#default route
// Route::get('/', function () {
//     return view('welcome');
// });

#change default browser route to HomeController
Route::get('/', [HomeController::class,'index']);


#to access this, from default link, add /hello
Route::get('/hello', [HomeController::class,'index']);
#Route::get('/hello', [HomeController::class,'index2']);

Route::get('/hello2', function () {
    return "Hello Fandil";
});