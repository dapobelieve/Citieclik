<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Request;
use App\User;

class RequestWasMade
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $service;
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Request $service, User $user)
    {
        $this->service = $service;
        $this->user = $user;
        // str_random()
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
