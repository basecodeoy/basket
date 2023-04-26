<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\TurkeyValueAddedTax;

final class Turkey implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TurkeyValueAddedTax
     */
    private $tax;

    /**
     * Turkey constructor.
     */
    public function __construct()
    {
        $this->tax = new TurkeyValueAddedTax();
        $this->currency = new Currency('TRY');
    }

    /**
     * @return TurkeyValueAddedTax
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
