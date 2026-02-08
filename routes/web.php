<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HobbiesController;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/hobbies', [HobbiesController::class, 'index']);