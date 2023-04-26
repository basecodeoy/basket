<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Formatters;

use BombenProdukt\Basket\Contracts\Formatter;
use BombenProdukt\Basket\Contracts\Percentage;

final class PercentFormatter implements Formatter
{
    public function format($value): string
    {
        if ($value instanceof Percentage) {
            $value = $value->toPercent();
        }

        return $value->int().'%';
    }
}
