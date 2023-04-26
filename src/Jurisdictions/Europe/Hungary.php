<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\HungaryValueAddedTax;
use Money\Currency;

final class Hungary implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var HungaryValueAddedTax
     */
    private $tax;

    /**
     * Hungary constructor.
     */
    public function __construct()
    {
        $this->tax = new HungaryValueAddedTax();
        $this->currency = new Currency('HUF');
    }

    /**
     * @return HungaryValueAddedTax
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
