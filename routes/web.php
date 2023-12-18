<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('post');
