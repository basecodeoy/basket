<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\NewMexicoValueAddedTax;
use Money\Currency;

final class NewMexico implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewMexicoValueAddedTax
     */
    private $tax;

    /**
     * NewMexico constructor.
     */
    public function __construct()
    {
        $this->tax = new NewMexicoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewMexicoValueAddedTax
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
