<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class TestEvent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public ?array $data = null;

    public function __construct(array $dataForMessage)
    {
        $this->data = $dataForMessage;
    }

    public function broadcastOn(): Channel
    {
        return new Channel('messages');
    }

    public function broadcastAs(): string
    {
        return 'send_message';
    }

    public function broadcastWith(): array
    {
        return $this->data;
    }
}
