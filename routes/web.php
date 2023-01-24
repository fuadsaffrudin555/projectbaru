<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;

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
})->middleware('auth');

Route::middleware('only_guest')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProses']);
});


Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin')->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');
    
    //category
    Route::get('Category', [CategoryController::class, 'index'])->name('Category.index');
    Route::get('Category-create', [CategoryController::class, 'create']);
    Route::post('Category-store', [CategoryController::class, 'store'])->name('Category.store');
    Route::get('Category-edit/{slug}', [CategoryController::class, 'edit']);
    Route::put('Category-update/{slug}', [CategoryController::class, 'update']);
    Route::get('Category-delete/{slug}', [CategoryController::class, 'delete']);
    Route::get('Category-destroy/{slug}', [CategoryController::class, 'destroy']);

    //car
    Route::get('car', [CarController::class, 'index'])->name('car.index');
    Route::get('car-create', [CarController::class, 'create']);
    Route::post('car-store', [CarController::class, 'store']);
    Route::get('car-show/{slug}', [CarController::class, 'show']);
    Route::get('car-edit/{slug}', [CarController::class, 'edit']);
    Route::put('car-update/{slug}', [CarController::class, 'update']);
    Route::get('car-delete/{slug}', [CarController::class, 'delete']);
    Route::get('car-destroy/{slug}', [CarController::class, 'destroy']);

    //customer
    Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('customer-create', [CustomerController::class, 'create']);
    Route::post('customer-store', [CustomerController::class, 'store']);
    Route::get('customer-show/{slug}', [CustomerController::class, 'show']);
    Route::get('customer-edit/{slug}', [CustomerController::class, 'edit']);
    Route::put('customer-update/{slug}', [CustomerController::class, 'update']);
    Route::get('customer-delete/{slug}', [CustomerController::class, 'delete']);
    Route::get('customer-destroy/{slug}', [CustomerController::class, 'destroy']);

    //Transaksi
    Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('transaksi-create', [TransaksiController::class, 'create']);
    Route::post('transaksi-store', [TransaksiController::class, 'store']);
    Route::get('transaksi-edit/{id}', [TransaksiController::class, 'edit']);
    Route::put('transaksi-update/{id}', [TransaksiController::class, 'update']);
    Route::get('transaksi-destroy/{id}', [TransaksiController::class, 'destroy']);
});