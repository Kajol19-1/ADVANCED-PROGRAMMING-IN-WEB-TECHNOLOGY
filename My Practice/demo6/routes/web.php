<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
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

//Route::resource('products', productController::class);
Route::get('/index',[productController::class, 'index'])->name('products.index');
Route::get('/create',[productController::class,'create'])->name('products.create');
Route::post('/store',[productController::class,'store'])->name('products.store');
Route::get('/show',[productController::class,'show'])->name('products.show');
Route::get('/edit',[productController::class,'edit'])->name('products.edit');
Route::put('/update',[productController::class,'update'])->name('products.update');
//Route::detele('/destroy',[productController::class, 'destroy'])->name('products.destroy');


