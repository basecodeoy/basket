<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\SwitzerlandValueAddedTax;
use Money\Currency;

final class Switzerland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwitzerlandValueAddedTax
     */
    private $tax;

    /**
     * Switzerland constructor.
     */
    public function __construct()
    {
        $this->tax = new SwitzerlandValueAddedTax();
        $this->currency = new Currency('CHF');
    }

    /**
     * @return SwitzerlandValueAddedTax
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
