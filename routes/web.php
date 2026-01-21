<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;

Route::feeds();

Route::post('/contact', [ContactController::class, 'store'])
    ->middleware(ProtectAgainstSpam::class);

Route::get('/blog', [PostsController::class, 'index'])->name('posts.index');
Route::get('/blog/{post}', [PostsController::class, 'show'])->name('posts.show');
