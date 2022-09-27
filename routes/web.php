<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


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


Route::middleware('isGuest')->group(function(){
    Route::get('/register', [AuthController::class,'register'])->name('register');
    Route::post('/register', [AuthController::class,'doRegister'])->name('doRegister');
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
});

Route::middleware('isLoggedIn')->group(function() {
    Route::get('/', [HomeController::class,'index'])->name('index');
    Route::get('/products', [ProductController::class,'index'])->name('products');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('product');
    Route::get('/about', [HomeController::class,'about'])->name('about');
    Route::get('/contact', [ContactController::class,'index'])->name('contact');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/contact', [ContactController::class,'index'])->name('contact');
});

Route::middleware('isAdmin')->group(function() {
    Route::get('/admin', [AdminController::class,'index'])->name('admin');
    Route::post('/admin', [AdminController::class, 'store'])->name('store');
    Route::get('/adminUpdate/{id}', [AdminController::class, 'update'])->name('update');
    Route::post('/adminUpdate', [AdminController::class, 'updateStore'])->name('updateStore');
    Route::post('/adminDelete', [AdminController::class, 'deleteStore'])->name('deleteStore');




});


