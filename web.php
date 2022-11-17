<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductController;

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
Route::get('/addproduct',[ProductController::class,'addproduct'])->name("addproduct");
Route::get('/showproduct',[ProductController::class,'showproduct'])->name("showproduct");
Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name("editproduct");
Route::get('/status/{id}',[ProductController::class,'status'])->name("status");
Route::get('/delete/{id}',[ProductController::class,'delete'])->name("delete");
Route::post('/productstore',[ProductController::class,'productstore'])->name("productstore");
Route::post('/update/{id}',[ProductController::class,'update'])->name("update");


Route::get('/', function () {
    return view('home');
});
