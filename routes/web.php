<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\AboutController;

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

Route::get('/', [IndexController::class,'index'])->name("home");

Route::get('/products', [ProductController::class,'index'])->name("product");

Route::get('/testimonials', [TestimonyController::class,'index'])->name("testimony");

Route::get('/about', [AboutController::class,'index'])->name("about");
