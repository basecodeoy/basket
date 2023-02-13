<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\OhioValueAddedTax;

class Ohio implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OhioValueAddedTax
     */
    private $tax;

    /**
     * Ohio constructor.
     */
    public function __construct()
    {
        $this->tax      = new OhioValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return OhioValueAddedTax
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
