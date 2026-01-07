<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])
    ->middleware(ProtectAgainstSpam::class);
