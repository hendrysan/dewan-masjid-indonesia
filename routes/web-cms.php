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

    Route::prefix('user')->group(function () {
        Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('cms.users');
    });

    Route::prefix('subdistrict')->group(function () {
        Route::get('/', [App\Http\Controllers\SubdistrictController::class, 'index'])->name('cms.subdistricts');
        Route::get('/create', [App\Http\Controllers\SubdistrictController::class, 'create'])->name('cms.subdistricts.create');
        Route::delete('/destroy/{id}', [App\Http\Controllers\SubdistrictController::class, 'destroy'])->name('cms.subdistricts.destroy');

        Route::post('/store', [App\Http\Controllers\SubdistrictController::class, 'store'])->name('cms.subdistricts.store');
        Route::get('/edit/{id}', [App\Http\Controllers\SubdistrictController::class, 'edit'])->name('cms.subdistricts.edit');
        Route::put('/update/{id}', [App\Http\Controllers\SubdistrictController::class, 'update'])->name('cms.subdistricts.update');
    });

    Route::prefix('dropdown')->group(function () {
        Route::post('/subdistrict', [App\Http\Controllers\SubdistrictController::class, 'json_request'])->name('cms.subdistricts.json');
    });

});

