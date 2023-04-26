<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Formatters;

use BombenProdukt\Basket\Contracts\Formatter;
use BombenProdukt\Basket\Discounts\PercentageDiscount;
use BombenProdukt\Basket\Discounts\ValueDiscount;
use Carbon\Exceptions\InvalidTypeException;

final class QuantityFormatter implements Formatter
{
    public function format($value): string
    {
        $value = $value->rate();

        if ($value instanceof PercentageDiscount) {
            return (new PercentFormatter($value))->format($value);
        }

        if ($value instanceof ValueDiscount) {
            return (new MoneyFormatter())->format($value);
        }

        throw new InvalidTypeException('Invalid discount type');
    }
}
