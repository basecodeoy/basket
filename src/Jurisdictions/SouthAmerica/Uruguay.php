<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\SouthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\SouthAmerica\UruguayValueAddedTax;
use Money\Currency;

final class Uruguay implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UruguayValueAddedTax
     */
    private $tax;

    /**
     * Uruguay constructor.
     */
    public function __construct()
    {
        $this->tax = new UruguayValueAddedTax();
        $this->currency = new Currency('UYU');
    }

    /**
     * @return UruguayValueAddedTax
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
