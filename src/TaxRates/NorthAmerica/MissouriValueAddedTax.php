<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class MissouriValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * MissouriValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.04225;
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
