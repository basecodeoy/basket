<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Formatters;

use PreemStudio\Basket\Contracts\Formatter;
use PreemStudio\Basket\Contracts\Percentage;

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
