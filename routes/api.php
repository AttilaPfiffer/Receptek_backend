<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\ReceptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/kategoria', [KategoriaController::class, 'index']);
Route::get('/receptek', [ReceptController::class, 'index']);
Route::delete('/receptek/{id}', [ReceptController::class, 'destroy']);