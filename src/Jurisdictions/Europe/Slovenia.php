<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\SloveniaValueAddedTax;
use Money\Currency;

final class Slovenia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SloveniaValueAddedTax
     */
    private $tax;

    /**
     * Slovenia constructor.
     */
    public function __construct()
    {
        $this->tax = new SloveniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SloveniaValueAddedTax
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
