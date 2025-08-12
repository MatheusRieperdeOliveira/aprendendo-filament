<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatBodyComponent extends Component
{

    public array $messages = [
        [
            "from_me" => false,
            "message" => "Salve cachorro"
        ],
        [
            "from_me" => false,
            "message" => "Deboas?"
        ],
        [
            "from_me" => true,
            "message" => "opa, deboas dmaise"
        ],
    ];

    protected $listeners = ['echo:messages,send' => 'messageReceived'];
    public function messageReceived($payload)
    {
        dd($payload);
    }

    public function render(): View
    {
        return view('livewire.chat-body-component');
    }
}
