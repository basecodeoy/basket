<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\BelarusValueAddedTax;
use Money\Currency;

final class Belarus implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BelarusValueAddedTax
     */
    private $tax;

    /**
     * Belarus constructor.
     */
    public function __construct()
    {
        $this->tax = new BelarusValueAddedTax();
        $this->currency = new Currency('BYR');
    }

    /**
     * @return BelarusValueAddedTax
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
