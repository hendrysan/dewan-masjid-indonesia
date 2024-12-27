<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;






Auth::routes();

Route::prefix('cms')->group(function () {

    Route::get('/', [App\Http\Controllers\Cms\DashboardController::class, 'index'])->name('cms.dashboard')->middleware('auth');

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('cms.dashboard');

    // Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('cms.login');

    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('cms.login');

    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('cms.logout');



});
