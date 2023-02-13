<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\VenezuelaValueAddedTax;

class Venezuela implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VenezuelaValueAddedTax
     */
    private $tax;

    /**
     * Venezuela constructor.
     */
    public function __construct()
    {
        $this->tax      = new VenezuelaValueAddedTax;
        $this->currency = new Currency('VEF');
    }

    /**
     * @return VenezuelaValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
