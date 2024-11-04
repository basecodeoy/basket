<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\NewHampshireValueAddedTax;
use Money\Currency;

final class NewHampshire implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewHampshireValueAddedTax
     */
    private $tax;

    /**
     * NewHampshire constructor.
     */
    public function __construct()
    {
        $this->tax = new NewHampshireValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewHampshireValueAddedTax
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
