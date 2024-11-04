<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\RomaniaValueAddedTax;
use Money\Currency;

final class Romania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RomaniaValueAddedTax
     */
    private $tax;

    /**
     * Romania constructor.
     */
    public function __construct()
    {
        $this->tax = new RomaniaValueAddedTax();
        $this->currency = new Currency('RON');
    }

    /**
     * @return RomaniaValueAddedTax
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
