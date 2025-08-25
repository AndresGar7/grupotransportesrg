<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content\FrontendController;
use Inertia\Inertia;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/servicios', [FrontendController::class, 'service'])->name('service');

Route::get('admin', function () {
    return Inertia::render('Admin');
})->name('admin');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
