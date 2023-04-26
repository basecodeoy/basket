<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\AustriaValueAddedTax;
use Money\Currency;

final class Austria implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AustriaValueAddedTax
     */
    private $tax;

    /**
     * Austria constructor.
     */
    public function __construct()
    {
        $this->tax = new AustriaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return AustriaValueAddedTax
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
