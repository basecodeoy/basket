<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\LouisianaValueAddedTax;
use Money\Currency;

final class Louisiana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LouisianaValueAddedTax
     */
    private $tax;

    /**
     * Louisiana constructor.
     */
    public function __construct()
    {
        $this->tax = new LouisianaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return LouisianaValueAddedTax
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
