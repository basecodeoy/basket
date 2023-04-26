<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\WyomingValueAddedTax;

final class Wyoming implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WyomingValueAddedTax
     */
    private $tax;

    /**
     * Wyoming constructor.
     */
    public function __construct()
    {
        $this->tax = new WyomingValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WyomingValueAddedTax
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
