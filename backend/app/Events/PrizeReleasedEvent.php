<?php

namespace App\Events;

class PrizeReleasedEvent extends Event
{
    public $email;
    public $coupon;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email, $coupon)
    {
        $this->email = $email;
        $this->coupon = $coupon;
    }
}
