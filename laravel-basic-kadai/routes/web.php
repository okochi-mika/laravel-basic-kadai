<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // ← これ大事！

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']); // ← これもOK
