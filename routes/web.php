<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\ProductController::class, 'home'])->name('home');
Route::get('/shop', [App\Http\Controllers\ProductController::class, 'index'])->name('shop');
Route::resource('product', App\Http\Controllers\ProductController::class);

// Route::get('/', function () {
//     return view('main/home');
// });
