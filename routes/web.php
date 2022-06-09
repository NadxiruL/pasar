<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

//Authentication
//Route::group(['prefix' => ''], function () {
Route::get('signup', [RegisterController::class, 'index'])->name('sign_up.index');
Route::post('signup', [RegisterController::class, 'register'])->name('sign_up.create');
Route::get('login', [LoginController::class, 'index'])->name('sign_in.index');
Route::post('login', [LoginController::class, 'login'])->name('sign_in.create');

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
//     Route::resource('order', OrderController::class)->name('order.dashboard');
// });

//Products
// Route::group(['prefix' => '/'], function () {
//     Route::resource('product', ProductController::class);
// });

//Customers

//Inventory

//Setting
