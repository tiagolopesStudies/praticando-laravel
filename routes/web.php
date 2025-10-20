<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class)->name('home');

Route::get('/signup', [Controllers\SignupController::class, 'create'])->name('signup');
Route::get('/login', [Controllers\LoginController::class, 'create'])->name('login');
Route::get('/reset-password', [Controllers\ResetPasswordController::class, 'index'])->name('reset-password');

Route::get('/cars/search', [Controllers\CarController::class, 'search'])->name('cars.search');
Route::get('/wishlist', [Controllers\CarController::class, 'wishlist'])->name('wishlist');
Route::resource('/cars', Controllers\CarController::class);

require_once __DIR__ . '/samples.php';

Route::fallback(function () {
    return View::make('not-found');
});
