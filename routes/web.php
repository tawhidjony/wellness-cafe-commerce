<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function(){
    $categoryList = Category::all();
    $productList = Product::all();
    return view('frontend/welcome', compact('productList', 'categoryList'));
});
Route::view('/product-details', 'frontend/product-details');

// ADD TO CART
Route::get('/cart', [CartController::class, 'cartIndex'])->name('cart.index');
Route::post('/add-to-cart', [CartController::class, 'addItemToCart'])->name('add.cart');
Route::put('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.update');
Route::get('/cart/destroy/{rowId}', [CartController::class, 'cartDestroy'])->name('cart.destroy');

Auth::routes();
Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function() {
    Route::group(['middleware' => ['check_permission']], function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::resource('/users', UserController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/product', ProductController::class);
        Route::resource('/roles', RoleController::class);
    });
});
