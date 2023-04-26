<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\SerbiaValueAddedTax;

final class Serbia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SerbiaValueAddedTax
     */
    private $tax;

    /**
     * Serbia constructor.
     */
    public function __construct()
    {
        $this->tax = new SerbiaValueAddedTax();
        $this->currency = new Currency('RSD');
    }

    /**
     * @return SerbiaValueAddedTax
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
