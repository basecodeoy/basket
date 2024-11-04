<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\TaxRates\NorthAmerica;

use BaseCodeOy\Basket\Contracts\TaxRate;

final class WashingtonValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * WashingtonValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.065;
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
