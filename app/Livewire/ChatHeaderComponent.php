<?php

namespace App\Livewire;

use Livewire\Component;

class ChatHeaderComponent extends Component
{
    public ?array $contact = null;

    #[\Livewire\Attributes\On('contactSelected')]
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.chat-header-component');
    }
}
