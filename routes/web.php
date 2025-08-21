<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content\WelcomeController;
use Inertia\Inertia;

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('admin', function () {
    return Inertia::render('Admin');
})->name('admin');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
