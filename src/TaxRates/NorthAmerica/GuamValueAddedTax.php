<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

final class GuamValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * GuamValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.04;
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
