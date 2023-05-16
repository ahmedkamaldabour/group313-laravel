<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'home']);
Route::get('/about/{id?}',[HomeController::class,'about']);

// Categories Routes
Route::get('/categories',[CategoryController::class,'index']);
Route::get('/categories/create',[CategoryController::class,'create']);
Route::post('/categories',[CategoryController::class,'store']);
Route::get('/categories/{id}/edit',[CategoryController::class,'edit']);
Route::put('/categories/{id}',[CategoryController::class,'update']);
Route::delete('/categories/delete/{id}',[CategoryController::class,'destroy']);





