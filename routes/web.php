<?php

use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', Home::class)->name('home');
});

require __DIR__.'/auth.php';
