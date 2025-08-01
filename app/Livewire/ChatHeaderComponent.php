<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ChatHeaderComponent extends Component
{
    public ?array $contact = null;

    #[On('contactSelected')]
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.chat-header-component');
    }
}
