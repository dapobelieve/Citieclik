<?php

namespace App\Listeners;

use App\Events\RequestWasMade;


use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


use App\Http\Controllers\Sms\SmsController as smser;
use App\User;

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

    private function subscribedUsers()
    {
        $data = User::has('subscriptions')->get();
         $numString = '';
         foreach ($data as $key ) {
            if($key->isSubscribed())
                $numString .= $key['phone'].',';
         }
         return $numString;
    }

    /**
     * Handle the event.
     *
     * @param  RequestWasMade  $event
     * @return void
     */
    public function handle(RequestWasMade $event)
    {
        $sender      = new smser;
        $requestHash = $event->service->hash;
        $smsTo       = $this->subscribedUsers();
        // dd($event->service->created_at);
        
        // dd($event);
    }
}
