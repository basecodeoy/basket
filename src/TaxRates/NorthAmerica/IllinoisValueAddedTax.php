<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class IllinoisValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * IllinoisValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.0625;
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
