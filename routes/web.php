<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    route::get('/register', 'register')->name('register');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
