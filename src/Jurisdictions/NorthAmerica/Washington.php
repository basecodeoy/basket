<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\WashingtonValueAddedTax;

final class Washington implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WashingtonValueAddedTax
     */
    private $tax;

    /**
     * Washington constructor.
     */
    public function __construct()
    {
        $this->tax = new WashingtonValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WashingtonValueAddedTax
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
