<?php

namespace App\Listeners\EmailConfirm;

use Mail;
use App\Events\UserRegistered;
use App\Mail\ConfirmEmail;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


class EmailConfirmation implements ShouldQueue;
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        Mail::to($event->user)->send(new ConfirmEmail($event->user));
        // dd($event->user);
    }
}
