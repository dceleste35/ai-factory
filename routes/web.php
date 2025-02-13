<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\Profile;
use App\Livewire\Pages\Settings;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', Home::class)->name('home');

    Route::get('profile', Profile::class)->name('profile');
    Route::get('settings', Settings::class)->name('settings');
});

require __DIR__.'/auth.php';
