<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\VermontValueAddedTax;
use Money\Currency;

final class Vermont implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VermontValueAddedTax
     */
    private $tax;

    /**
     * Vermont constructor.
     */
    public function __construct()
    {
        $this->tax = new VermontValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return VermontValueAddedTax
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
