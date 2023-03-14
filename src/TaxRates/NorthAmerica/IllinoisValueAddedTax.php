<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\NorthAmerica;

use PreemStudio\Basket\Contracts\TaxRate;

final class IllinoisValueAddedTax implements TaxRate
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

    public function float(): float
    {
        return $this->rate;
    }

    public function percentage(): int
    {
        return intval($this->rate * 100);
    }
}
