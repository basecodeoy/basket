<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class UtahValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * UtahValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.0595;
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
