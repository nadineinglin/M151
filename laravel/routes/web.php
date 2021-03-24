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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[App\Http\Controllers\ProductController::class,'list']);
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);

Route::post('/newuser',[\App\Http\Controllers\UsersController::class,'register']);
Route::get('/newuser',[\App\Http\Controllers\UsersController::class,'allowuser']);

Route::post('/login',[\App\Http\Controllers\UsersController::class,'login']);
Route::get('/login',[\App\Http\Controllers\UsersController::class,'getlogin']);


