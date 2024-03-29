<?php

use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/***
 * Route d'enregistrement 
 */
Route::get('/', function () {
    return  "Hello ! Welcome to laravel " .app()->version();
});



/**
 * Route de connexion
 */
Route::get('/register', [RegisterUserController::class,'create']);


/**
 * mot de passe oublié
 */

// Route::post('/register', [RegisterUserController::class,"store"]);

/**
 * reset password
 */

Route::get('/reset-password', function () {
    return  "register";
});



/**
 * Mot de passe oublié
 */
Route::get('/forgot-password', function () {
    return  "register";
});



