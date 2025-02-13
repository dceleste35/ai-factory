<?php

use App\Livewire\Settings\ApiKeys;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ApiKeys::class)
        ->assertStatus(200);
});
