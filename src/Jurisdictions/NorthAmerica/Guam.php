<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\GuamValueAddedTax;
use Money\Currency;

final class Guam implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GuamValueAddedTax
     */
    private $tax;

    /**
     * Guam constructor.
     */
    public function __construct()
    {
        $this->tax = new GuamValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return GuamValueAddedTax
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
