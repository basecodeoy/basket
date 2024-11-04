<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\TaxRates\NorthAmerica;

use BaseCodeOy\Basket\Contracts\TaxRate;

final class MontanaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * MontanaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.00;
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
