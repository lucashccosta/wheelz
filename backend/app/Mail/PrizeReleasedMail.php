<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PrizeReleasedMail extends Mailable
{
    use Queueable, SerializesModels;

    private $coupon;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($coupon)
    {
        $this->coupon = $coupon;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown("mails.prize-released")
            ->subject("Wheelz - Cupom de Desconto")
            ->with([
                "coupon" => $this->coupon,
            ]);
    }
}