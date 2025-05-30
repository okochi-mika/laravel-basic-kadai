<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // PostControllerを使う宣言
use App\Http\Controllers\RequestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']); // ← これもOK


Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/requests/create', [RequestController::class, 'create']);

Route::post('/requests/confirm', [RequestController::class, 'confirm']);

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
