<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\GuamValueAddedTax;

class Guam implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GuamValueAddedTax
     */
    private $tax;

    /**
     * Guam constructor.
     */
    public function __construct()
    {
        $this->tax      = new GuamValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return GuamValueAddedTax
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
