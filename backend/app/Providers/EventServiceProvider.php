<?php

namespace App\Providers;

use App\Events\PrizeReleasedEvent;
use App\Listeners\SendEmailListener;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\PrizeReleasedEvent::class => [
            \App\Listeners\SendEmailListener::class,
        ],
    ];
}
