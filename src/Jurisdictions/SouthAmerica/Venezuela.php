<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\SouthAmerica\VenezuelaValueAddedTax;

final class Venezuela implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VenezuelaValueAddedTax
     */
    private $tax;

    /**
     * Venezuela constructor.
     */
    public function __construct()
    {
        $this->tax = new VenezuelaValueAddedTax();
        $this->currency = new Currency('VEF');
    }

    /**
     * @return VenezuelaValueAddedTax
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
