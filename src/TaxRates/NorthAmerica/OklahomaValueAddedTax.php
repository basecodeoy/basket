<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

class OklahomaValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * OklahomaValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.045;
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
