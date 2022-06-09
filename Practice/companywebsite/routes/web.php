<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\companyController;

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

Route::get('/product/service', [companyController::class,'product'])->name('product');
Route::get('/home', [companyController::class,'home'])->name('home');
Route::get('/about', [companyController::class,'about'])->name('about');
Route::get('/teams', [companyController::class,'teams'])->name('teams');
Route::get('/contact', [companyController::class,'contact'])->name('contact');
