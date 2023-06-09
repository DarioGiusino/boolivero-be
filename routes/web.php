<?php

use App\Http\Controllers\admin\FoodController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\RestaurantController;
use App\Http\Controllers\guest\HomeController as GuestHomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// # rotte per guest
Route::get('/', [GuestHomeController::class, 'index'])->name('guest.home');

// # rotte per admin
Route::middleware('auth')->name('admin.')->prefix('/admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resource('foods', FoodController::class);
    Route::patch('foods/patch/{food}', [FoodController::class, 'patch'])->name('foods.patch');
    Route::resource('orders', OrderController::class);
    Route::resource('restaurants', RestaurantController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';
