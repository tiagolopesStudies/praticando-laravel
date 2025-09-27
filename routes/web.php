<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signup', [Controllers\SignupController::class, 'create'])->name('signup');
Route::get('/login', [Controllers\LoginController::class, 'create'])->name('login');

Route::get('/cars/search', [Controllers\CarController::class, 'search'])->name('cars.search');
Route::resource('/cars', Controllers\CarController::class);

require_once __DIR__ . '/samples.php';
