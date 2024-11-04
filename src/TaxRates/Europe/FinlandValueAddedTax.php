<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\TaxRates\Europe;

use BaseCodeOy\Basket\Contracts\TaxRate;

final class FinlandValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * FinlandValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.24;
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
