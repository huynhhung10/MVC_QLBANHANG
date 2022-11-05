<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;


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

Route::get('/', function () {
    return view('welcome');
});











// BackEnd


Route::view('/admin_login', 'admin_login')->name('admin_login');

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);



//QL sản phẩm
Route::get('/all-product', [ProductController::class, 'index']);
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::post('/addproduct', [ProductController::class, 'store']);
Route::post('/product-destroy', [ProductController::class, 'destroy']);
Route::get('/edit-product', [ProductController::class, 'edit_product']);
Route::post('/updateproduct', [ProductController::class, 'update']);


//QL NXB
Route::get('/all-brand', [BrandController::class, 'index']);
//value : di toi dia chi de lam gi, value di vao cai ham de xu ly
Route::get('edit-brand/{id}',[BrandController::class,'geteditbrand']);
Route::post('posteditbrand',[BrandController::class,'posteditbrand']);
Route::get('/add-brand', [BrandController::class, 'add_brand']);
Route::post('postaddbrand',[BrandController::class,'postaddbrand']);
Route::get('/edit-brand', [BrandController::class, 'edit_brand']);
Route::get('delete-brand/{id}',[BrandController::class,'deletebrand']);
Route::get('change-status-brand/id={id}&status={status}',[BrandController::class,'changeStatus']);

//QL loại sản phẩm
Route::get('/all-category', [CategoryController::class, 'index']);
Route::get('/add-category', [CategoryController::class, 'add_category']);
Route::get('/edit-category', [CategoryController::class, 'edit_category']);

//QL khách hàng
Route::get('/all-customer', [CustomerController::class, 'index']);
Route::get('/add-customer', [CustomerController::class, 'add_customer']);
Route::get('/edit-customer', [CustomerController::class, 'edit_customer']);
Route::post('postaddcustomer',[CustomerController::class,'postaddcustomer']);
Route::get('edit-customer/{id}',[CustomerController::class,'geteditcustomer']);
Route::post('posteditcustomer',[CustomerController::class,'posteditcustomer']);
Route::get('delete-customer/{id}',[CustomerController::class,'deletecustomer']);
Route::get('change-status-customer/id={id}&status={status}',[CustomerController::class,'changeStatus']);

//QL user
Route::get('/all-user', [UserController::class, 'index']);
Route::get('/add-user', [UserController::class, 'add_user']);

//QL đơn hàng
Route::get('/all-order', [OrderController::class, 'index']);
Route::get('/view-order', [OrderController::class, 'show_order']);
Route::get('/add-order', [OrderController::class, 'add_order']);
Route::get('/edit-order', [OrderController::class, 'edit_order']);
