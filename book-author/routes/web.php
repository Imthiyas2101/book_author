<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', fn() => redirect()->route('authors.index'));

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);