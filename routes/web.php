<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('loginForm', [AuthController::class, 'showLoginForm'])->name('loginForm');
Route::get('registrasiForm', [AuthController::class, 'showRegistrasiForm'])->name('registrasiForm');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
