<?php

namespace App\Http\Controllers\Api;

use App\Events\PrizeReleasedEvent;
use App\Http\Controllers\Controller;
use App\Repositories\CouponRepository;

class CouponsController extends Controller
{
    private $couponRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CouponRepository $couponRepository)
    {
        $this->couponRepository = $couponRepository;
    }

    public function index() {
        if(!request()->filled(['prize', 'email'])) {
            return response()->json([
                'error' => 'Invalid request!',
            ], 400);
        }

        $email = request()->query('email');
        $prize = request()->query('prize');
        $coupon = $this->couponRepository->find($prize);
        
        event(new PrizeReleasedEvent($email, $coupon));
        
        return response()->json(null, 204);
    }
}
