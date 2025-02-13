<?php

use App\Livewire\Pages\Settings;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Settings::class)
        ->assertStatus(200);
});
