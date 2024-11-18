<?php

use App\Models\User;

it('can create a user', function () {
    $user = User::factory()->create();

    expect($user->name)->toBeString();
    expect($user->email)->toBeString();
    expect($user->password)->toBeString();
});
