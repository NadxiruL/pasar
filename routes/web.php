<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

//Register
Route::group(['prefix' => 'register'], function () {
    Route::get('/', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/', [RegisterController::class, 'register'])->name('register.create');
});

//Users
Route::group(['prefix' => '/'], function () {
    // Route::resource('user', UserController::class);
});

//Plans
Route::group(['prefix' => '/'], function () {
    Route::get('plans', function () {
        return view('plans.packages');
    });
});

//Orders
Route::group(['prefix' => '/'], function () {
    Route::resource('order', OrderController::class);
});

//Products
Route::group(['prefix' => '/'], function () {
    Route::resource('product', ProductController::class);
});

//Customers

//Inventory

//Setting
