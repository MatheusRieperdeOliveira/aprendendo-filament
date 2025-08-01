<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use App\Events\TestEvent;

class ChatFooterComponent extends Component
{

    public ?string $message = null;
    public function handleMessage(): void
    {
        event(new TestEvent(["from_me" => true, "message" => $this->message, "contact_id" => 1]));
        $this->message = null;
    }

    public function render(): View
    {
        return view('livewire.chat-footer-component');
    }
}
