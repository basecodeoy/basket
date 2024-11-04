<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\HungaryValueAddedTax;
use Money\Currency;

final class Hungary implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var HungaryValueAddedTax
     */
    private $tax;

    /**
     * Hungary constructor.
     */
    public function __construct()
    {
        $this->tax = new HungaryValueAddedTax();
        $this->currency = new Currency('HUF');
    }

    /**
     * @return HungaryValueAddedTax
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
