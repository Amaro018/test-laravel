<?php

use App\Http\Controllers\ShareController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('pages.userPages.Registration.register');
});

Route::get('/', [DashboardController::class, 'index'])->name('homepage');
Route::post('/share', [ShareController::class, 'store'])->name('share.create');


Route::get('header', [HeaderController::class, 'showHeader']);
