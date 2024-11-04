<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\SerbiaValueAddedTax;
use Money\Currency;

final class Serbia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SerbiaValueAddedTax
     */
    private $tax;

    /**
     * Serbia constructor.
     */
    public function __construct()
    {
        $this->tax = new SerbiaValueAddedTax();
        $this->currency = new Currency('RSD');
    }

    /**
     * @return SerbiaValueAddedTax
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
