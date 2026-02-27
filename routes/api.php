<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImportListController;

// Fallback on unknown requests
Route::get('/movie-list', [ImportListController::class, 'index']);