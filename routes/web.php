<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

//all user
Route::get('/', [PostController::class, 'index']);

Route::get('/ProductDetail/{product_id?}', [PostController::class, 'productDetail'])->name('productdetail');
Route::get('/ProductCategory/{category_id?}', [PostController::class, 'productCategory'])->name('productcategory');

Route::get('/search' , [PostController::class , 'search_post'])->name('search');

//Guest only
Route::get('/login', [AuthController::class, 'login'])->middleware('guest.middleware');
Route::post('/loginAction', [AuthController::class, 'loginAction'])->middleware('guest.middleware');

Route::get('/regis', [AuthController::class, 'register'])->middleware('guest.middleware');
Route::post('/regisAction', [AuthController::class, 'regisAction'])->middleware('guest.middleware');

//User only
Route::get('/logout', [AuthController::class, 'logout'])->middleware('user.middleware');
Route::get('/profile', [AuthController::class, 'profile'])->middleware('user.middleware');

//customer only
Route::post('/purchase', [AuthController::class, 'pruchase'])->name('purchase')->middleware('customer.middleware');
Route::post('/purchaseCart', [AuthController::class, 'purchaseCart'])->name('purchaseCart')->middleware('customer.middleware');

Route::get('/cart', [AuthController::class, 'cart_page'])->middleware('customer.middleware');
Route::delete('/delete_cart' , [AuthController::class , 'delete_cart'])->name('delete_cart')->middleware('customer.middleware');

Route::get('/history', [AuthController::class, 'history_page'])->middleware('customer.middleware');

//admin only
Route::get('/manageProduct', [AuthController::class, 'manage_product'])->middleware('admin.middleware');
Route::get('/manageProduct/search', [AuthController::class, 'search_manage'])->name('searchManage')->middleware('admin.middleware');

Route::delete('/delete_product' , [AuthController::class , 'delete_product'])->name('delete_product')->middleware('admin.middleware');

Route::get('/add', [AuthController::class, 'add_page'])->middleware('admin.middleware');
Route::post('/insertData', [AuthController::class, 'store'])->middleware('admin.middleware');

Route::get('/update/{product_id?}', [AuthController::class, 'update_page'])->name('update_product')->middleware('admin.middleware');
Route::patch('/updateData' , [AuthController::class , 'update_product_logic'])->name('update_product_logic')->middleware('admin.middleware');



