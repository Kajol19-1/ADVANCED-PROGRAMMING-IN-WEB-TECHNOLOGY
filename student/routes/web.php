<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/details/{sid}',[studentController::class,'details'])->name('details');
Route::get('/student/list',[studentController::class,'list'])->name('students.list');
//Route::get('/details/{id}/{name}',[productcontroller::class,'details'])->name('details');
Route::get('/student/create',[studentController::class,'create'])->name('create');
Route::post('/student/create',[studentController::class,'createSubmit'])->name('create');
