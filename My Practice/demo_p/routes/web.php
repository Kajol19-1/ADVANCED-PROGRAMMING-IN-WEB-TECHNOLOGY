<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
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
Route::get('/',[studentController::class,'home'])->name('home');
Route::get('/details/{content_id}',[studentController::class,'details'])->name('details');
Route::get('/content/list',[studentController::class,'list'])->name('contents.list');
//Route::get('/details/{id}/{name}',[productcontroller::class,'details'])->name('details');
Route::get('/content/create',[studentController::class,'create'])->name('create');
Route::post('/content/create',[studentController::class,'createSubmit'])->name('create');

