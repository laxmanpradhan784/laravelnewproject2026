<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::prefix('admin')->name('admin.')->group(function () {

    // ✅ SHOW LOGIN PAGE (GET)
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    // ✅ HANDLE LOGIN (POST)
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');

    // (optional) Admin register
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');

    // 🔐 PROTECTED ADMIN ROUTES
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');
    });
});
