<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/signup', [Controllers\SignupController::class, 'create'])->name('signup');
Route::get('/login', [Controllers\LoginController::class, 'create'])->name('login');

require_once __DIR__ . '/samples.php';
