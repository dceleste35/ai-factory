<?php

namespace App\Livewire\Settings;

use Livewire\Component;

class ApiKeys extends Component
{
    public array $apiKeys = [
        [
            'name' => 'Mailgun',
            'id' => 'id-1234567890',
        ],
        [
            'name' => 'Stripe',
            'id' => 'id-1234567891',
        ],
    ];

    public function deleteApiKey(string $id)
    {
        dd($id);
    }

    public function render()
    {
        return view('livewire.settings.api-keys');
    }
}
