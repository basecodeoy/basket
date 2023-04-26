<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\SouthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\SouthAmerica\ChileValueAddedTax;
use Money\Currency;

final class Chile implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ChileValueAddedTax
     */
    private $tax;

    /**
     * Chile constructor.
     */
    public function __construct()
    {
        $this->tax = new ChileValueAddedTax();
        $this->currency = new Currency('CLP');
    }

    /**
     * @return ChileValueAddedTax
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
