<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\SlovakiaValueAddedTax;
use Money\Currency;

final class Slovakia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SlovakiaValueAddedTax
     */
    private $tax;

    /**
     * Slovakia constructor.
     */
    public function __construct()
    {
        $this->tax = new SlovakiaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SlovakiaValueAddedTax
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
