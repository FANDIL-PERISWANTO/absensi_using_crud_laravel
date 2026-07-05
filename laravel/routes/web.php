<!-- Halaman ini sebagai route dasar yang diakses di url browser secara default -->
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

#default route
Route::get('/', function () {
    return view('welcome');
});

#to access this, from default link, add /dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
