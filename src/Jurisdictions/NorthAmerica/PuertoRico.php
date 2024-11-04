<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\PuertoRicoValueAddedTax;
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
