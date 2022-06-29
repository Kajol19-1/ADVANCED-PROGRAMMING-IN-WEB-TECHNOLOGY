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

Route::get('/file',[contentController::class,'test_file']);
Route::post('/upload', [contentController::class,'upload'])->name('upload');
