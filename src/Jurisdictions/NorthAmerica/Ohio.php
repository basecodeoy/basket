<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\OhioValueAddedTax;
use Money\Currency;

final class Ohio implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OhioValueAddedTax
     */
    private $tax;

    /**
     * Ohio constructor.
     */
    public function __construct()
    {
        $this->tax = new OhioValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return OhioValueAddedTax
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
