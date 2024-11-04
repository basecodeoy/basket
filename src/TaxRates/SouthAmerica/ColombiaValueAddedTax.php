<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\TaxRates\SouthAmerica;

use BaseCodeOy\Basket\Contracts\TaxRate;

final class ColombiaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * ColombiaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.16;
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
