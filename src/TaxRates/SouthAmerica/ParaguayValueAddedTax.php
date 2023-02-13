<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\SouthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class ParaguayValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * ParaguayValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.10;
    }

    /**
     * @return float
     */
    public function float(): float
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}
