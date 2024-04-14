<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('header', [HeaderController::class, 'showHeader']);
