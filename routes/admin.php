<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProfileController;

Route::prefix('admin')->group(function () {
    Route::get('profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::put('profile/{id}', [AdminProfileController::class, 'update'])->name('admin.profile.update');
});


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

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');

    Route::get('/earnings', function () {
        return view('admin.earnings');
    })->name('earnings');

    Route::get('/downloads', function () {
        return view('admin.downloads');
    })->name('downloads');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    // 🔐 PROTECTED ADMIN ROUTES
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');
    });
});
