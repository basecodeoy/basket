<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Formatters;

use BombenProdukt\Basket\Contracts\Formatter;

final class CouponFormatter implements Formatter
{
    public function format($value): array
    {
        $coupons = [];

        foreach ($value as $coupon) {
            $coupons[] = $coupon->identifier();
        }

        return $coupons;
    }
}
