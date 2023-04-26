<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\TaxRates\NorthAmerica;

use BombenProdukt\Basket\Contracts\TaxRate;

final class NewMexicoValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * NewMexicoValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.05125;
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
