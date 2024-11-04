<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\TurkeyValueAddedTax;
use Money\Currency;

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
