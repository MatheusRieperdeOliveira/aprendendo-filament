<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class TestEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data = null;

    public function __construct($dataForMessage)
    {
        $this->data = $dataForMessage;
    }

    public function broadcastOn(): Channel
    {
        return new Channel('messages');
    }

    public function broadcastAs(): string
    {
        return 'send';
    }

    public function broadcastWith(): array
    {
        return $this->data;
    }
}
