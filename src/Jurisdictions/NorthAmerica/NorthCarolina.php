<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\NorthCarolinaValueAddedTax;

final class NorthCarolina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorthCarolinaValueAddedTax
     */
    private $tax;

    /**
     * NorthCarolina constructor.
     */
    public function __construct()
    {
        $this->tax = new NorthCarolinaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NorthCarolinaValueAddedTax
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
