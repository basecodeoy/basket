<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\TaxRates\Australia;

use BaseCodeOy\Basket\Contracts\TaxRate;

final class AustraliaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * AustraliaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.10;
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
