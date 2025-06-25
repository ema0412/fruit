<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/products', [ContactController::class, 'products']);
Route::get('/products/register', [ContactController::class, 'register']);
Route::get('/products/search', [ContactController::class, 'search']);
