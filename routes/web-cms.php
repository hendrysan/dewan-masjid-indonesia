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

        Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('cms.users.profile');

        Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('cms.users.create');
        Route::delete('/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('cms.users.destroy');

        Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('cms.users.store');
        Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('cms.users.edit');
        Route::put('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('cms.users.update');
    });

    Route::prefix('role')->group(function () {
        Route::get('/', [App\Http\Controllers\RoleController::class, 'index'])->name('cms.roles');
        Route::get('/create', [App\Http\Controllers\RoleController::class, 'create'])->name('cms.roles.create');
        Route::delete('/destroy/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('cms.roles.destroy');

        Route::post('/store', [App\Http\Controllers\RoleController::class, 'store'])->name('cms.roles.store');
        Route::get('/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('cms.roles.edit');
        Route::put('/update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('cms.roles.update');
    });

    Route::prefix('subdistrict')->group(function () {
        Route::get('/', [App\Http\Controllers\SubdistrictController::class, 'index'])->name('cms.subdistricts');
        Route::get('/create', [App\Http\Controllers\SubdistrictController::class, 'create'])->name('cms.subdistricts.create');
        Route::delete('/destroy/{id}', [App\Http\Controllers\SubdistrictController::class, 'destroy'])->name('cms.subdistricts.destroy');

        Route::post('/store', [App\Http\Controllers\SubdistrictController::class, 'store'])->name('cms.subdistricts.store');
        Route::get('/edit/{id}', [App\Http\Controllers\SubdistrictController::class, 'edit'])->name('cms.subdistricts.edit');
        Route::put('/update/{id}', [App\Http\Controllers\SubdistrictController::class, 'update'])->name('cms.subdistricts.update');
    });

    Route::prefix('vilage')->group(function () {
        Route::get('/', [App\Http\Controllers\VilageController::class, 'index'])->name('cms.vilages');
        Route::get('/create', [App\Http\Controllers\VilageController::class, 'create'])->name('cms.vilages.create');
        Route::delete('/destroy/{id}', [App\Http\Controllers\VilageController::class, 'destroy'])->name('cms.vilages.destroy');

        Route::post('/store', [App\Http\Controllers\VilageController::class, 'store'])->name('cms.vilages.store');
        Route::get('/edit/{id}', [App\Http\Controllers\VilageController::class, 'edit'])->name('cms.vilages.edit');
        Route::put('/update/{id}', [App\Http\Controllers\VilageController::class, 'update'])->name('cms.vilages.update');

        Route::post('/select2-dropdown', [App\Http\Controllers\VilageController::class, 'select2_dropdown'])->name('cms.vilages.select2.dropdown');
    });

    Route::prefix('masjid')->group(function () {
        Route::get('/', [App\Http\Controllers\MasjidController::class, 'index'])->name('cms.masjids');
        Route::get('/create', [App\Http\Controllers\MasjidController::class, 'create'])->name('cms.masjids.create');
        Route::delete('/destroy/{id}', [App\Http\Controllers\MasjidController::class, 'destroy'])->name('cms.masjids.destroy');

        Route::post('/store', [App\Http\Controllers\MasjidController::class, 'store'])->name('cms.masjids.store');
        Route::get('/edit/{id}', [App\Http\Controllers\MasjidController::class, 'edit'])->name('cms.masjids.edit');
        Route::put('/update/{id}', [App\Http\Controllers\MasjidController::class, 'update'])->name('cms.masjids.update');
    });

    Route::prefix('berita')->group(function () {
        Route::get('/', [App\Http\Controllers\BeritaController::class, 'index'])->name('cms.beritas');
        Route::get('/create', [App\Http\Controllers\BeritaController::class, 'create'])->name('cms.beritas.create');
        Route::delete('/destroy/{id}', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('cms.beritas.destroy');

        Route::post('/store', [App\Http\Controllers\BeritaController::class, 'store'])->name('cms.beritas.store');
        Route::get('/edit/{id}', [App\Http\Controllers\BeritaController::class, 'edit'])->name('cms.beritas.edit');
        Route::put('/update/{id}', [App\Http\Controllers\BeritaController::class, 'update'])->name('cms.beritas.update');
    });

    Route::prefix('taushiyah')->group(function () {
        Route::get('/', [App\Http\Controllers\TaushiyahController::class, 'index'])->name('cms.taushiyahs');
        Route::get('/create', [App\Http\Controllers\TaushiyahController::class, 'create'])->name('cms.taushiyahs.create');
        Route::delete('/destroy/{id}', [App\Http\Controllers\TaushiyahController::class, 'destroy'])->name('cms.taushiyahs.destroy');

        Route::post('/store', [App\Http\Controllers\TaushiyahController::class, 'store'])->name('cms.taushiyahs.store');
        Route::get('/edit/{id}', [App\Http\Controllers\TaushiyahController::class, 'edit'])->name('cms.taushiyahs.edit');
        Route::put('/update/{id}', [App\Http\Controllers\TaushiyahController::class, 'update'])->name('cms.taushiyahs.update');
    });

    Route::prefix('dropdown')->group(function () {
        Route::post('/subdistrict', [App\Http\Controllers\VilageController::class, 'json_request'])->name('cms.vilages.json');
    });

});

