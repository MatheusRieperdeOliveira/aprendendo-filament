<?php

namespace App\Livewire;

use Livewire\Component;

class ChatMessagesComponent extends Component
{
    public array $profiles = [
        [
            'id' => 0,
            'name' => 'Matheus',
            'photo' => 'https://i.pinimg.com/1200x/3e/6e/be/3e6ebe9cb87b4e3d844f846a9d822c59.jpg'
        ],
        [
            'id' => 1,
            'name' => 'Pietra',
            'photo' => 'https://i.pinimg.com/1200x/63/18/21/63182150e7cc9a8f8f5a0306e7e0fc78.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Lucas',
            'photo' => 'https://i.pinimg.com/1200x/45/1f/cb/451fcb6b3957ad2226f091c41b0b0c67.jpg'
        ],
    ];

    public function selectContact(int $id): void
    {
        $this->dispatch('contactSelected', collect($this->profiles)->firstWhere('id', $id));
    }

    public function render()
    {
        return view('livewire.chat-messages-component');
    }
}
