<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\WyomingValueAddedTax;

class Wyoming implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WyomingValueAddedTax
     */
    private $tax;

    /**
     * Wyoming constructor.
     */
    public function __construct()
    {
        $this->tax      = new WyomingValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return WyomingValueAddedTax
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
