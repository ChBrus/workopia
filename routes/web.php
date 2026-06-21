<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

// Home Routes
Route::get('/', [HomeController::class, 'index']);

// Job Routes
Route::get('/jobs/share', [JobController::class, 'share']); // Tiene que estar antes de la ruta resource para funcionar
Route::resource('jobs', JobController::class);
