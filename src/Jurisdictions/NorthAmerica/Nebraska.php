<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\NebraskaValueAddedTax;

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
