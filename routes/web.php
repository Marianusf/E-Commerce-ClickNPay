<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
Route::get('/dashboard/buyer', function () {
    return view('dashboard.buyer');
})->name('dashboard.seller')->middleware('auth');
Route::get('/dashboard/seller', function () {
    return view('dashboard.seller');
})->name('dashboard.seller')->middleware('auth');





Route::get('loginForm', [AuthController::class, 'showLoginForm'])->name('loginForm');
Route::post('loginForm', [AuthController::class, 'showLoginForm'])->name('loginForm');
Route::get('registrasiForm', [AuthController::class, 'showRegistrasiForm'])->name('registrasiForm');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
