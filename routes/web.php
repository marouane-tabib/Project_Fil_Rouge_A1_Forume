<?php

use App\Http\Controllers\AdminControllers\ProductController;
use App\Http\Controllers\Test\test;
use Illuminate\Support\Facades\Route;

// admine
Route::resource('/products', ProductController::class);
