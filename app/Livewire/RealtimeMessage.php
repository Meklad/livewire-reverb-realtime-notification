<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Contracts\View\View;
use App\Events\SentRealaltimeMessage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class RealtimeMessage extends Component
{
    use LivewireAlert;

    public string $message;

    public function render(): View
    {
        return view("livewire.realtime.message");
    }

    public function sendMessage(): void
    {
        event(new SentRealaltimeMessage($this->message));
        $this->message = "";
    }

    #[On('echo:my-message,SentRealaltimeMessage')]
    public function handleRealtimeMessage(array $message): void
    {
        $this->alert("success", $message["message"]);
    }
}
