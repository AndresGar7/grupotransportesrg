<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content\WelcomeController;
use Inertia\Inertia;

Route::get('/', [WelcomeController::class, 'index'])->name('home');