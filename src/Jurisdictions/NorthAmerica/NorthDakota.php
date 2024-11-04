<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\NorthDakotaValueAddedTax;
use Money\Currency;

final class NorthDakota implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorthDakotaValueAddedTax
     */
    private $tax;

    /**
     * NorthDakota constructor.
     */
    public function __construct()
    {
        $this->tax = new NorthDakotaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NorthDakotaValueAddedTax
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
