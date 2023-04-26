<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\SouthDakotaValueAddedTax;

final class SouthDakota implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SouthDakotaValueAddedTax
     */
    private $tax;

    /**
     * SouthDakota constructor.
     */
    public function __construct()
    {
        $this->tax = new SouthDakotaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return SouthDakotaValueAddedTax
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
