<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\registrationController;


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
Route::get('/home',[PageController::class, 'home']);
Route::get('/registration',[registrationController::class, 'registration']);
Route::POST('/register',[registrationController::class, 'register']);


