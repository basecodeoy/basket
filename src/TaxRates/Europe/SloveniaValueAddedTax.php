<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\TaxRates\Europe;

use BombenProdukt\Basket\Contracts\TaxRate;

final class SloveniaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * SloveniaValueAddedTax constructor.
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
