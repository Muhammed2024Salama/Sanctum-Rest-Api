<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

/**
 * Authentication Routes
 * These routes are used for user registration, login, and profile management.
 * Fields such as name, email, password, and phone_number are derived from the user migrations table.
 */
Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('user', 'userProfile');
    });
});
