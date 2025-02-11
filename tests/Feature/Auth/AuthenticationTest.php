<?php

use App\Models\User;
use Livewire\Livewire;

test('login screen nca be rendered', function () {
    $response = $this->get('/login');

    $response
        ->assertOk()
        ->assertSeeLivewire('pages.auth.login');
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create();

    $component = Livewire::test('pages.auth.login')
        ->set('form.email', $user->email)
        ->set('form.password', 'password');

    $component->call('login');

    $component
        ->assertHasNoErrors()
        ->assertRedirect(route('home', absolute: false));

    $this->assertAuthenticated();
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $component = Livewire::test('pages.auth.login')
        ->set('form.email', $user->email)
        ->set('form.password', 'wrong-password');

    $component->call('login');

    $component
        ->assertHasErrors()
        ->assertNoRedirect();

    $this->assertGuest();
});

test('navigation menu can be rendered', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSeeHtml('data-flux-navlist');
});
