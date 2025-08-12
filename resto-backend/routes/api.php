<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DishController;
use App\Http\Controllers\API\DrinkController;
use App\Http\Controllers\API\CategoryController;


Route::get('/dishes', [DishController::class, 'index']);
Route::get('/dish/expensive', [DishController::class, 'getMostExpensive']);
Route::get('/dish/search/{name}', [DishController::class, 'getByName']);
Route::get('/dish/{id}', [DishController::class, 'getById']);


Route::get('/drinks', [DrinkController::class, 'index']);
Route::get('/drink/expensive', [DrinkController::class, 'getMostExpensive']);
Route::get('/drink/search/{name}', [DrinkController::class, 'getByName']);
Route::get('/drink/{id}', [DrinkController::class, 'getById']);


Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'getById']);
Route::get('/category/search/{name}', [CategoryController::class, 'getByName']);
