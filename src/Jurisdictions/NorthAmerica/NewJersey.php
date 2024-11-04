<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\NewJerseyValueAddedTax;
use Money\Currency;

final class NewJersey implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewJerseyValueAddedTax
     */
    private $tax;

    /**
     * NewJersey constructor.
     */
    public function __construct()
    {
        $this->tax = new NewJerseyValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewJerseyValueAddedTax
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
