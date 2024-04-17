<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShareController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('pages.userPages.Registration.register');
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