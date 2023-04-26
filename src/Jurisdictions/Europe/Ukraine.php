<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\UkraineValueAddedTax;
use Money\Currency;

final class Ukraine implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UkraineValueAddedTax
     */
    private $tax;

    /**
     * Ukraine constructor.
     */
    public function __construct()
    {
        $this->tax = new UkraineValueAddedTax();
        $this->currency = new Currency('UAH');
    }

    /**
     * @return UkraineValueAddedTax
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
