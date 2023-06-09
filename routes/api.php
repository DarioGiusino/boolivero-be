<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\ContactController;
use App\Http\Controllers\api\PaymentController;
use App\Http\Controllers\api\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// # restaurant apis
Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show']);

// # category apis
Route::apiResource('/categories', CategoryController::class);
Route::get('/categories/{id}/restaurants', [CategoryController::class, 'restaurantsByCategory']);

// # payment apis
Route::get('/ctoken', [PaymentController::class, 'getClientToken']);
Route::post('/make-payment', [PaymentController::class, 'makePayment']);

// # emails apis
Route::post('/contact-message', [ContactController::class, 'send']);
