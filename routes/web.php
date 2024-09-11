<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('/', [ItemController::class, 'home']);


Route::get('/items', [ItemController::class, 'items']);


Route::get('/pictures', [ItemController::class, 'pictures']);
