<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\PuertoRicoValueAddedTax;
use Money\Currency;

final class PuertoRico implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PuertoRicoValueAddedTax
     */
    private $tax;

    /**
     * PuertoRico constructor.
     */
    public function __construct()
    {
        $this->tax = new PuertoRicoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return PuertoRicoValueAddedTax
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
