<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\MontenegroValueAddedTax;
use Money\Currency;

final class Montenegro implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MontenegroValueAddedTax
     */
    private $tax;

    /**
     * Montenegro constructor.
     */
    public function __construct()
    {
        $this->tax = new MontenegroValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return MontenegroValueAddedTax
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
