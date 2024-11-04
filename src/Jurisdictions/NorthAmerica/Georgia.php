<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\GeorgiaValueAddedTax;
use Money\Currency;

final class Georgia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GeorgiaValueAddedTax
     */
    private $tax;

    /**
     * Georgia constructor.
     */
    public function __construct()
    {
        $this->tax = new GeorgiaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return GeorgiaValueAddedTax
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
