<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\Europe;

use PreemStudio\Basket\Contracts\TaxRate;

final class BelarusValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * BelarusValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.20;
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
