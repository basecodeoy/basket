<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\NetherlandsValueAddedTax;
use Money\Currency;

final class Netherlands implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NetherlandsValueAddedTax
     */
    private $tax;

    /**
     * Netherlands constructor.
     */
    public function __construct()
    {
        $this->tax = new NetherlandsValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return NetherlandsValueAddedTax
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
