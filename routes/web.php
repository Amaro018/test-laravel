<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Models\Comment;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\AuthController;



Route::get('/', [DashboardController::class, 'index'])->name('homepage');

//down here will be my new home page
Route::get('home', [HomeController::class, 'index'])->name('home.show');




Route::group(['prefix' => 'shares/', 'as' => 'shares.'], function () {

    Route::post('/', [ShareController::class, 'store'])->name('store')->WithoutMiddleware('auth');
    Route::get('/{idea}', [ShareController::class, 'show'])->name('show')->WithoutMiddleware('auth');

    Route::group(['middleware' => ['auth']], function () {

        //to delete
        Route::delete('/{idea}', [ShareController::class, 'destroy'])->name('destroy');

        //to edit
        Route::get('/{idea}/edit', [ShareController::class, 'edit'])->name('edit');

        Route::put('/{idea}', [ShareController::class, 'update'])->name('update');
        // for the comments
        Route::post('/{idea}/comments', [CommentController::class, 'store'])->name('comments.store');
    });
});
// Route::resource('shares', ShareController::class);
// Route::resource('shares', ShareController::class)->except(['index', 'create', 'show'])->middleware('auth');
// Route::resource('shares', ShareController::class)->only('show');




//authentication is here
//to register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

//to login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

//to log out
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');





