<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\NorwayValueAddedTax;

final class Norway implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorwayValueAddedTax
     */
    private $tax;

    /**
     * Norway constructor.
     */
    public function __construct()
    {
        $this->tax = new NorwayValueAddedTax();
        $this->currency = new Currency('NOK');
    }

    /**
     * @return NorwayValueAddedTax
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
