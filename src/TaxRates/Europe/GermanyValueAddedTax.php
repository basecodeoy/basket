<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\Europe;

use PreemStudio\Basket\Contracts\TaxRate;

final class GermanyValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * GermanyValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.19;
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
