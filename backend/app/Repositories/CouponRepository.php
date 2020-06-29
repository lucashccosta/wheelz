<?php

namespace App\Repositories;

class CouponRepository {

    const COUPONS = [
        '3' => 'CUPOM3DESCONTO',
        '5' => 'CUPOM5DESCONTO' ,
        '10' => 'CUPOM10DESCONTO' 
    ];

    public function all() {
        return self::COUPONS;
    }

    public function find($index) {
        return self::COUPONS[$index];
    }
}