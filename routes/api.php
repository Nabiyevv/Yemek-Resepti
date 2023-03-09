<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\MIngredientController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/product',ProductController::class);

Route::prefix('product')->group(function () {
    Route::apiResource('/{product}/ingrs', MIngredientController::class);
});
Route::apiResource('/ingr',IngredientController::class);

