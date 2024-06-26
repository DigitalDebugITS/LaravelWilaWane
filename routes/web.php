<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ResourcesController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/resources', [ResourcesController::class, 'index'])->name('resources.index');
