<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Student Authentication Routes
Route::prefix('student')->group(function () {
    Route::middleware('guest:student')->group(function () {
        Route::get('/register', [App\Http\Controllers\Auth\StudentAuthController::class, 'showRegistrationForm'])->name('student.register');
        Route::post('/register', [App\Http\Controllers\Auth\StudentAuthController::class, 'register']);
        Route::get('/login', [App\Http\Controllers\Auth\StudentAuthController::class, 'showLoginForm'])->name('student.login');
        Route::post('/login', [App\Http\Controllers\Auth\StudentAuthController::class, 'login']);
    });
    
    Route::middleware('auth:student')->group(function () {
        Route::post('/logout', [App\Http\Controllers\Auth\StudentAuthController::class, 'logout'])->name('student.logout');
    });
});

// Protected routes that require student authentication
Route::middleware('auth:student')->group(function () {
    Route::resource('products', ProductController::class);
});
