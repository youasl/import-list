<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CropsController;

// Fallback on unknown requests
Route::get('/movie-list', [CropsController::class, 'index']);