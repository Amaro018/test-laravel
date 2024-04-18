<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShareController;

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [DashboardController::class, 'index'])->name('homepage');

Route::post('shares', [ShareController::class, 'store'])->name('shares.store');



Route::delete('/shares/{idea}', [ShareController::class, 'destroy'])->name('shares.destroy');

Route::get('header', [HeaderController::class, 'showHeader']);

Route::get('shares/{idea}', [ShareController::class, 'show'])->name('showSharedpost.show');

Route::get('shares/{idea}/edit', [ShareController::class, 'edit'])->name('editSharedpost.edit');

Route::put('shares/{idea}', [ShareController::class, 'update'])->name('shares.update');


// for the comments
Route::post('shares/{idea}/comments', [CommentController::class, 'store'])->name('shares.comments.store');





//down here will be my new home page
Route::get('home', [HomeController::class, 'index'])->name('home.show');

//to register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

//to login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

//dashboard route
// Route::get('/Dashboard.Client.Dashboard.{username}', [DashboardController::class, 'show'])->name('Dashboard');