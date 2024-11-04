<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Formatters;

use BaseCodeOy\Basket\Contracts\Formatter;

final class TaxRateFormatter implements Formatter
{
    public function format($value): string
    {
        return $value->percentage().'%';
    }
}
