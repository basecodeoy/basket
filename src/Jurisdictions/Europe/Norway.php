<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\NorwayValueAddedTax;

class Norway implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorwayValueAddedTax
     */
    private $tax;

    /**
     * Norway constructor.
     */
    public function __construct()
    {
        $this->tax = new NorwayValueAddedTax;
        $this->currency = new Currency('NOK');
    }

    /**
     * @return NorwayValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    public function currency(): Currency
    {
        return $this->currency;
    }
}
