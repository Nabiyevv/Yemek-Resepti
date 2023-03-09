<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\MIngredientController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::prefix('/admin')->group(function(){
        Route::get('/ingr/create',[IngredientController::class,'create']);
        Route::get('/product/create',[ProductController::class,'create']);
        Route::get('/product/{product}/create',[MIngredientController::class,"create"])->name('mingr.create');
    });
});
Route::view('/data','apis');





require __DIR__.'/auth.php';
