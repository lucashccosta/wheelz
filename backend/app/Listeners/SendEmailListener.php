<?php

namespace App\Listeners;

use App\Mail\PrizeReleasedMail;
use App\Events\PrizeReleasedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailListener
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
     * @param  \App\Events\PrizeReleasedEvent  $event
     * @return void
     */
    public function handle(PrizeReleasedEvent $event)
    {
        Mail::to($event->email)
            ->send(new PrizeReleasedMail($event->coupon));
    }
}
