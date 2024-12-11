<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('admin/login', function () {
    return view('admin-panel.login');
})->name('admin/login');

Route::get('dashbord', function () {
    return view('admin-panel.dashbord');
})->name('dashbord');

Route::get('shop', function () {
    return view('shop');
})->name('shop');

Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('product-details', function () {
    return view('product-details');
})->name('product.details');

Route::get('admin/register', [RegisterController::class,'create'])->name('admin/register');
Route::post('admin/store', [RegisterController::class,'register'])->name('admin.store');
Route::get('users/list', [UserController::class,'index'])->name('users.list');
Route::get('products/list', [ProductController::class,'index'])->name('products.list');
Route::get('products/creat', [ProductController::class,'create'])->name('products.creat');

