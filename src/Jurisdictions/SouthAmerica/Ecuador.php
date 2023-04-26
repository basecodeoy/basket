<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\SouthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\SouthAmerica\EcuadorValueAddedTax;
use Money\Currency;

final class Ecuador implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EcuadorValueAddedTax
     */
    private $tax;

    /**
     * Ecuador constructor.
     */
    public function __construct()
    {
        $this->tax = new EcuadorValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return EcuadorValueAddedTax
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
