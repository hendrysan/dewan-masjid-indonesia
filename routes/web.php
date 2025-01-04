<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('homepage');



Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
require('web-cms.php');
require('api.php');
