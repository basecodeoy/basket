<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\SouthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

final class BrazilValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * BrazilValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.17;
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
