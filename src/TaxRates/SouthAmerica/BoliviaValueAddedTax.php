<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\TaxRates\SouthAmerica;

use BaseCodeOy\Basket\Contracts\TaxRate;

final class BoliviaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * BoliviaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.13;
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
