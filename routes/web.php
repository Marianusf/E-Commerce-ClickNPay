<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('loginForm', [AuthController::class, 'showLoginForm'])->name('loginForm');
