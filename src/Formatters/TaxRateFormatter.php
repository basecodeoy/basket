<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Formatters;

use BombenProdukt\Basket\Contracts\Formatter;

final class TaxRateFormatter implements Formatter
{
    public function format($value): string
    {
        return $value->percentage().'%';
    }
}
