<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\TaxRates\NorthAmerica;

use BaseCodeOy\Basket\Contracts\TaxRate;

final class MissouriValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * MissouriValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.04225;
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
