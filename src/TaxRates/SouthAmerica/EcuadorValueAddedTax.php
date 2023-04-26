<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\TaxRates\SouthAmerica;

use BombenProdukt\Basket\Contracts\TaxRate;

final class EcuadorValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * EcuadorValueAddedTax constructor.
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
