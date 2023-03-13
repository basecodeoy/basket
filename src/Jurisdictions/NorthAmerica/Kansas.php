<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\KansasValueAddedTax;

class Kansas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var KansasValueAddedTax
     */
    private $tax;

    /**
     * Kansas constructor.
     */
    public function __construct()
    {
        $this->tax = new KansasValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return KansasValueAddedTax
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
