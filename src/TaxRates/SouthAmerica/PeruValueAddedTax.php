<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\SouthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

final class PeruValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * PeruValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.16;
    }

    public function float(): float
    {
        return $this->rate;
    }

    public function percentage(): int
    {
        return (int) ($this->rate * 100);
    }
}
