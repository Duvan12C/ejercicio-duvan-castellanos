<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get("/listBooks", [BookController::class, 'index']);
Route::post("/addBook", [BookController::class, 'store']);
Route::get("/viewBook/{id}", [BookController::class, 'show']);
Route::put("/updateBook/{id}", [BookController::class, 'update']);
Route::delete("/deleteBook/{id}", [BookController::class, 'destroy']);
