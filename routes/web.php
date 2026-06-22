<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

// Home Routes
Route::get('/', [HomeController::class, 'index']);

// Job Routes
Route::resource('jobs', JobController::class);
