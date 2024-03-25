<?php

use App\Livewire\RealtimeMessage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(RealtimeMessage::class)
        ->assertStatus(200);
});
