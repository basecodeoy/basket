<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class MississippiValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * MississippiValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.07;
    }

    public function float(): float
    {
        return $this->rate;
    }

    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}
