<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/sign_up',[\App\Http\Controllers\RegisterController::class, 'sign_up']);
Route::post('/register',[\App\Http\Controllers\RegisterController::class, 'register'])->name('register');

Route::get('/welcome',[\App\Http\Controllers\WelcomeController::class,'welcome'])->middleware('auth:sanctum');

Route::get('/login',[\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login_path',[\App\Http\Controllers\LoginController::class, 'login_method'])->name('log_in');


Route::get('/update',[\App\Http\Controllers\UpdateController::class, 'index'])->middleware('auth:sanctum');
Route::post('/update_na',[\App\Http\Controllers\UpdateController::class, 'updating'])->name('updated')->middleware('auth:sanctum');

Route::get('/logout',[\App\Http\Controllers\LoginController::class, 'logout']);
