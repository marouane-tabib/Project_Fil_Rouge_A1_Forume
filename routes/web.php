<?php

use App\Http\Controllers\AdminControllers\CategoryController;
use App\Http\Controllers\AdminControllers\ProductController;
use App\Http\Controllers\AdminControllers\ShapeController;
use App\Http\Controllers\AdminControllers\TagController;
use App\Http\Controllers\Test\test;
use Illuminate\Support\Facades\Route;

// admine
Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/tags', TagController::class);
Route::resource('/shapes', ShapeController::class);
