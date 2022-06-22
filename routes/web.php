<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Storefront\CartController;
use App\Http\Controllers\Store\DomainController;
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

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    //product
    Route::resource('product', ProductController::class);
    //category
    Route::resource('category', CategoryController::class);
    //store
    Route::resource('store', StoreController::class);
});

Route::post('/kedai', [CartController::class, 'addtoCart'])->name('cart.store');
Route::resource('/', DomainController::class);
