<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\SouthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\SouthAmerica\PeruValueAddedTax;
use Money\Currency;

final class Peru implements Jurisdiction
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
        $this->tax = new PeruValueAddedTax();
        $this->currency = new Currency('PEN');
    }

    /**
     * @return PeruValueAddedTax
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
