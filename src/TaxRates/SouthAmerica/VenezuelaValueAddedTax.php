<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\SouthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

final class VenezuelaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * VenezuelaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.12;
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
