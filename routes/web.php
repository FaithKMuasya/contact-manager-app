<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

/**
 * Create a controller using the command below and edit functions inside it
 * > php artisan make:controller LoginController
 */

/**
 * These controllers will be accessed without authentication
 */
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'submit'])->name('login.submit');
Route::get('/logout', [LogoutController::class, 'index'])->name('logout');
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'create'])->name('signup.create');


/**
 * Create a middleware group
 * Routes inside this middleware will only be accesses when user is authenticated
 * if not authenticated(logged in), user will be redirected to /login
 * see (Http/Middleware/AllowAuthUsers.php)
 * create a middleware using command : php artisan make:middleware AllowAuthUsers
 * Also when user logs out, cache is cleared (see Http/Middleware/ClearCache.php)
 */
/**
 * Remember to register the middlewares in bootstrap/app.php
 */
Route::middleware(['allow-auth-users', 'clear-cache'])->group(function () {
     // Dashboard Module
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
     // Contacts Module
    Route::resource('contacts', ContactController::class);

});

