<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\NebraskaValueAddedTax;
use Money\Currency;

final class Nebraska implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NebraskaValueAddedTax
     */
    private $tax;

    /**
     * Nebraska constructor.
     */
    public function __construct()
    {
        $this->tax = new NebraskaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NebraskaValueAddedTax
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
