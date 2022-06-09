<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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



Route::get('/details/{s_id}',[studentcontroller::class,'details'])->name('details');
Route::get('/students/list',[studentcontroller::class,'list'])->name('students.list');
Route::get('/student/create',[studentcontroller::class,'create'])->name('create');
Route::post('/student/create',[studentcontroller::class,'createSubmit'])->name('create');
