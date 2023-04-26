<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\NorthDakotaValueAddedTax;

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
