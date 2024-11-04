<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\SouthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\SouthAmerica\GuyanaValueAddedTax;
use Money\Currency;

final class Guyana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GuyanaValueAddedTax
     */
    private $tax;

    /**
     * Guyana constructor.
     */
    public function __construct()
    {
        $this->tax = new GuyanaValueAddedTax();
        $this->currency = new Currency('GYD');
    }

    /**
     * @return GuyanaValueAddedTax
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
