<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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



Route::get('/', [ProductController::class, 'homeview'])->name('getproduct');
Route::get('/shop', [ProductController::class, 'shopview'])->name('getproduct');

Route::get('product/detail/{id}', [ProductController::class, 'detailProductView'])->name('product-detail.action');


// Register
Route::get('user/register', [AuthController::class, 'registeruser'])->name('register');
Route::post('user/register', [AuthController::class, 'user_register_action'])->name('user_register.action');
// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_action'])->name('login.action');


Route::group(['middleware' => 'auth'], function () {

    Route::post('logout', [AuthController::class, 'logout'])->name('logout.action');
    Route::group(['middleware' => 'seller'], function () {
        Route::get('seller', [ProductController::class, 'index'])->name('seller');
        // Seller Route
        Route::get('seller/product/add', [ProductController::class, 'routeupload'])->name('post-product.action');
        Route::post('seller/product/add', [ProductController::class, 'addproduct'])->name('product_add_admin.action');
        Route::get('seller/product/edit/{id}', [ProductController::class, 'routeedit'])->name('edit-product.action');
        Route::put('seller/product/edit/{id}', [ProductController::class, 'routeedit_action'])->name('product_edit_admin.action');
        Route::delete('seller/product/delete/{id}', [ProductController::class, 'deleteproduct'])->name('delete_product.action');
    });
});
