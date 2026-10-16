<?php

use Heritage\Support\Facades\Route;

Route::inertia('/', 'web/Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'panel/Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
