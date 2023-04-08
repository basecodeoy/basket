<?php

declare(strict_types=1);

namespace PreemStudio\Basket\TaxRates;

use PreemStudio\Basket\Contracts\TaxRate;

final class TaxFreeValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * UnitedKingdomValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0;
    }

    /**
     * @return float
     */
    public function float()
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage()
    {
        return (int) ($this->rate * 100);
    }
}
