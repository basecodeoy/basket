<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\TennesseeValueAddedTax;

class Tennessee implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TennesseeValueAddedTax
     */
    private $tax;

    /**
     * Tennessee constructor.
     */
    public function __construct()
    {
        $this->tax = new TennesseeValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return TennesseeValueAddedTax
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
