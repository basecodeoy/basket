<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\NewYorkValueAddedTax;
use Money\Currency;

final class NewYork implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewYorkValueAddedTax
     */
    private $tax;

    /**
     * NewYork constructor.
     */
    public function __construct()
    {
        $this->tax = new NewYorkValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewYorkValueAddedTax
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
