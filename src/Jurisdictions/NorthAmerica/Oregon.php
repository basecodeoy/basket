<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\OregonValueAddedTax;
use Money\Currency;

final class Oregon implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OregonValueAddedTax
     */
    private $tax;

    /**
     * Oregon constructor.
     */
    public function __construct()
    {
        $this->tax = new OregonValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return OregonValueAddedTax
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
