<?php

use Illuminate\Support\Facades\Route;


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



Route::get('/', [App\Http\Controllers\AdminController::class, 'log']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin_layout']);
Route::post('/admin_layout', [App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);

//category
Route::get('/form_category', [App\Http\Controllers\CategoryController::class, 'form_category']);
