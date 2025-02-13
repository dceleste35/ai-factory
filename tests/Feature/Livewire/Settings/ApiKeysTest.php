<?php

use App\Livewire\Settings\ApiKeys;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ApiKeys::class)
        ->assertStatus(200);
});

it('can delete an API key', function () {
    Livewire::test(ApiKeys::class)
        ->call('deleteApiKey', 'id-1234567890')
        ->assertOk();
});
