<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/ai', Home::class)->name('home');
