<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\SouthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\SouthAmerica\BrazilValueAddedTax;
use Money\Currency;

final class Brazil implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BrazilValueAddedTax
     */
    private $tax;

    /**
     * Brazil constructor.
     */
    public function __construct()
    {
        $this->tax = new BrazilValueAddedTax();
        $this->currency = new Currency('BRL');
    }

    /**
     * @return BrazilValueAddedTax
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
