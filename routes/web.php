<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Test\test;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// $controller_path = 'App\Http\Controllers';

// // Main Page Route
// Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
// Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');
// Route::get('/test', [test::class, 'index']);

// // pages
// Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');

// // authentication
// Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
// Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');

// admine
Route::resource('/product', ProductController::class);
