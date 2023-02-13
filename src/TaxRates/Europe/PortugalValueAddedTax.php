<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\Europe;

use PreemStudio\Basket\Contracts\TaxRate;

class PortugalValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * PortugalValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.23;
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
