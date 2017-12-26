<?php

namespace App\Listeners;

use App\Events\RequestWasMade;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\Sms\SmsController as smser;

class SmsUsers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RequestWasMade  $event
     * @return void
     */
    public function handle(RequestWasMade $event)
    {
        $sender = new smser;
        dd($sender->index());
    }
}
