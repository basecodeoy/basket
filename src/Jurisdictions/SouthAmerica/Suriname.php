<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\SouthAmerica\SurinameValueAddedTax;

final class Suriname implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SurinameValueAddedTax
     */
    private $tax;

    /**
     * Suriname constructor.
     */
    public function __construct()
    {
        $this->tax = new SurinameValueAddedTax();
        $this->currency = new Currency('SRD');
    }

    /**
     * @return SurinameValueAddedTax
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
