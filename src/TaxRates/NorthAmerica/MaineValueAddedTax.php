<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

final class MaineValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * MaineValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.055;
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
