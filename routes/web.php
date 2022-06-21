<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Storefront\CartController;
use App\Http\Controllers\Storefront\StoreFrontController;
use App\Http\Controllers\Store\StoreController;
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

// Route::get('/view', function () {

//     $categories = Category::all();

//     return view('welcome', [
//         'categories' => $categories,
//     ]);
// });

Auth::routes();

//Authentication
//Route::group(['prefix' => ''], function () {
Route::get('signup', [RegisterController::class, 'index'])->name('sign_up.index');
Route::post('signup', [RegisterController::class, 'register'])->name('sign_up.create');
Route::get('login', [LoginController::class, 'index'])->name('sign_in.index');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('/', [LoginController::class, 'logout'])->name('logout');
Route::get('account/verify/{token}', [LoginController::class, 'verifyAccount'])->name('account.verify');

//});

//Users
// Route::group(['prefix' => '/'], function () {
//     // Route::resource('user', UserController::class);
// });

//Plans
// Route::group(['prefix' => '/'], function () {
//     Route::get('plans', function () {
//         return view('plans.packages');
//     });
// });

//Orders
// Route::group(['prefix' => '/'], function () {
//     Route::resource('order', OrderController::class)->;
// });

//Products
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::resource('product', ProductController::class);
});

//Category
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::resource('category', CategoryController::class);
});

//Store
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::resource('store', StoreController::class);
});

//StoreFront
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::resource('/kedai', StoreFrontController::class);
});

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    //Route::get('/kedai', [CartController::class, 'cart'])->name('cart.cart');
    Route::post('/kedai', [CartController::class, 'addtoCart'])->name('cart.store');
});

//Customers

//Inventory

//Setting
