<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\GermanyValueAddedTax;
use Money\Currency;

final class Germany implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GermanyValueAddedTax
     */
    private $tax;

    /**
     * Germany constructor.
     */
    public function __construct()
    {
        $this->tax = new GermanyValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return GermanyValueAddedTax
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
