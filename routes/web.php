<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');

Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');

Route::get('/my-account', function () {
    return view('my-account');
})->name('my-account');


// AUTH ROUTES (Register / Login)
Route::get('/sign-up', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/sign-in', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





// here all this routes in for adminside 

// Admin controllers (ALIAS THEM)

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::prefix('admin')->name('admin.')->group(function () {

    // Auth pages
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');

    // Protected admin routes
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
