<?php

use Illuminate\Support\Facades\Route;

//Route::view('/ovodmin', 'livewire/pages/auth/login');

Route::view('/ovodmin', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
