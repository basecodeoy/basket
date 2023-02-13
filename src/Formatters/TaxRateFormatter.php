<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Formatters;

use PreemStudio\Basket\Contracts\Formatter;

class TaxRateFormatter implements Formatter
{
    /**
     * @param $value
     * @return string
     */
    public function format($value): string
    {
        return $value->percentage().'%';
    }
}
