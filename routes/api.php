<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

/**
 * name
 * email
 * password
 * phone_number
 * it comes from user migrations table
 */
Route::controller(AuthController::class)->group(function (){
    Route::post('register','register');
    Route::post('login','login');

});
