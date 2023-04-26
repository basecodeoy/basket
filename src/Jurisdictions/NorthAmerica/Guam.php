<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\GuamValueAddedTax;

final class Guam implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GuamValueAddedTax
     */
    private $tax;

    /**
     * Guam constructor.
     */
    public function __construct()
    {
        $this->tax = new GuamValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return GuamValueAddedTax
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
