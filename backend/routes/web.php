<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'getAllUsers']);

Route::get('/recipes', [RecipeController::class, 'getAllRecipes']);
Route::post('');
