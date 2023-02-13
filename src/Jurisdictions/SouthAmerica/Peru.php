<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\PeruValueAddedTax;

class Peru implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PeruValueAddedTax
     */
    private $tax;

    /**
     * Peru constructor.
     */
    public function __construct()
    {
        $this->tax      = new PeruValueAddedTax;
        $this->currency = new Currency('PEN');
    }

    /**
     * @return PeruValueAddedTax
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
