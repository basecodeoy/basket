<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\TaxRates\Europe;

use BaseCodeOy\Basket\Contracts\TaxRate;

final class ItalyValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * ItalyValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.22;
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
