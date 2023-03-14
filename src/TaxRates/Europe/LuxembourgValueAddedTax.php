<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates\Europe;

use PreemStudio\Basket\Contracts\TaxRate;

final class LuxembourgValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * LuxembourgValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.17;
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
