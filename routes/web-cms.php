<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::prefix('cms')->group(function () {

    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('cms.login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('cms.login');

    Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'showRegistrationForm'])->name('cms.register');
});
