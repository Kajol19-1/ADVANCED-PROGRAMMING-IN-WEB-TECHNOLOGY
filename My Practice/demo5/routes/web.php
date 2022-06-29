<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contentController;

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

Route::get('/create',[contentController::class,'create'])->name('create');
Route::post('/upload', [contentController::class,'upload'])->name('upload');
Route::get('/details',[contentController::class,'details'])->name('details');
Route::get('/content/list',[contentController::class,'list'])->name('list');
Route::get('/content/edit/{content_id}/{title}',[contentController::class,'edit'])->name('edit');
Route::post('/content/edit',[contentController::class,'editSubmit'])->name('edit');