<?php

use App\Http\Controllers\AdminControllers\CategoryController;
use App\Http\Controllers\AdminControllers\ColorController;
use App\Http\Controllers\AdminControllers\HomeStyleController;
use App\Http\Controllers\AdminControllers\MaterialController;
use App\Http\Controllers\AdminControllers\PatternController;
use App\Http\Controllers\AdminControllers\ProductController;
use App\Http\Controllers\AdminControllers\RoomController;
use App\Http\Controllers\AdminControllers\ShapeController;
use App\Http\Controllers\AdminControllers\TagController;
use App\Http\Controllers\Test\test;
use Illuminate\Support\Facades\Route;

// admine
Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/tags', TagController::class);
Route::resource('/shapes', ShapeController::class);
Route::resource('/rooms', RoomController::class);
Route::resource('/patterns', PatternController::class);
Route::resource('/materials', MaterialController::class);
Route::resource('/home-styles', HomeStyleController::class);
Route::resource('/colors', ColorController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
