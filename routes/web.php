<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

//user
Route::get('/', [UserController::class,'index'])->name('user.index');
//login
Route::get('/login', [LoginController::class,'index'])->name('login');
//login
Route::get('/register', [LoginController::class,'register'])->name('register');
//login
Route::get('/product', [UserController::class,'product'])->name('product');
//product
Route::get('/search', [UserController::class,'search'])->name('search');
//search
Route::get('/receipt', [UserController::class,'receipt'])->name('receipt');
//receipt
Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminsController::class,'index'])->name('admin.index');

    // List category
    Route::get('/category', [CategorysController::class,'category'])->name('admin.category');
    Route::get('/category_add', [CategorysController::class,'category_add'])->name('admin.category_add');
    Route::post('/category_add', [CategorysController::class,'category_create'])->name('admin.category_create');
    Route::get('/category_update_show/{id}', [CategorysController::class,'category_update_show'])->name('admin.category_update_show');
    Route::post('/category_update_show/{id}', [CategorysController::class,'category_update'])->name('admin.category_update');
    Route::get('/category_delete/{id}', [CategorysController::class,'category_delete'])->name('admin.category_delete');

    // List Account
    Route::get('/account', [AccountsController::class,'account'])->name('admin.account');

    // List Product
    Route::get('/product', [ProductsController::class,'product'])->name('admin.product');
    Route::get('/product_add', [ProductsController::class,'product_add'])->name('admin.product_add');

    // list brands
    Route::get('/brands', [BrandsController::class,'brands'])->name('admin.brands');
    Route::get('/brands_add', [BrandsController::class,'brands_add'])->name('admin.brands_add');

    // list  banners
    Route::get('/banners', [BannersController::class,'banners'])->name('admin.banners');
    Route::get('/banners_add', [BannersController::class,'banners_add'])->name('admin.banners_add');

    // list commnents
    Route::get('/comments', [CommentsController::class,'comments'])->name('admin.comments');
    Route::get('/comments_add', [CommentsController::class,'comments_add'])->name('admin.comments_add');

    // list order
    Route::get('/orders', [OrdersController::class,'orders'])->name('admin.orders');
});
