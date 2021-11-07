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
use Illuminate\Http\Request;

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
Route::get('/product-details', function(Request $request){
    return $request->all();
    return view('frontend/product-details');
})->name('product.details');

// ADD TO CART
Route::get('/cart', [CartController::class, 'cartIndex'])->name('cart.index');
Route::post('/add-to-cart', [CartController::class, 'addItemToCart'])->name('add.cart');
Route::put('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.update');
Route::get('/cart/destroy/{rowId}', [CartController::class, 'cartDestroy'])->name('cart.destroy');


Route::view('login', 'backend.auth.login');
Route::get('/shipping-login', [CartController::class, 'sippingLogin'])->name('shipping.login');
Route::post('/shipping-login-front', [CartController::class, 'sippingLoginPost'])->name('shipping.login.post');
Route::get('/shipping-register', [CartController::class, 'sippingRegister'])->name('shipping.register');
Route::post('/shipping-register-front', [CartController::class, 'sippingRegisterPost'])->name('shipping.register.post');

Auth::routes();
Route::post('/logout-front', [CartController::class, 'logoutPerform'])->name('logout.perform');
Route::get('/shipping-address', [CartController::class, 'sippingAddress'])->name('shipping.address')->middleware('front_auth');
Route::post('/shipping-address/store', [CartController::class, 'sippingAddressStore'])->name('shipping.store')->middleware('front_auth');

Route::get('/payment', [CartController::class, 'payment'])->name('payment.view')->middleware('front_auth');
Route::post('/payment/store', [CartController::class, 'paymentStore'])->name('payment.store')->middleware('front_auth');

Route::group(['prefix'=>'admin', 'middleware' => ['auth']], function() {

    Route::group(['middleware' => ['check_permission']], function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::resource('/users', UserController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/product', ProductController::class);
        Route::resource('/roles', RoleController::class);
    });
});
