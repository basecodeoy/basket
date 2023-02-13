<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\UkraineValueAddedTax;

class Ukraine implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UkraineValueAddedTax
     */
    private $tax;

    /**
     * Ukraine constructor.
     */
    public function __construct()
    {
        $this->tax      = new UkraineValueAddedTax;
        $this->currency = new Currency('UAH');
    }

    /**
     * @return UkraineValueAddedTax
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
