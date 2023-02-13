<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class WisconsinValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * WisconsinValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.05;
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
