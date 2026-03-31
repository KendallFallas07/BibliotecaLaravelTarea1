<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
Route::resource('publishers', PublisherController::class);