<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/author/books/{id}', [RelationController::class, 'getBooksByAuthor']);