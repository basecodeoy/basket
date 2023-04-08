<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Formatters;

use Carbon\Exceptions\InvalidTypeException;
use PreemStudio\Basket\Contracts\Formatter;
use PreemStudio\Basket\Discounts\PercentageDiscount;
use PreemStudio\Basket\Discounts\ValueDiscount;

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
