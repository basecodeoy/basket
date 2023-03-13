<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Formatters;

use PreemStudio\Basket\Contracts\Formatter;

class TaxRateFormatter implements Formatter
{
    public function format($value): string
    {
        return $value->percentage().'%';
    }
}
