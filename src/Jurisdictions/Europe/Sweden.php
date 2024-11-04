<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\SwedenValueAddedTax;
use Money\Currency;

final class Sweden implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwedenValueAddedTax
     */
    private $tax;

    /**
     * Sweden constructor.
     */
    public function __construct()
    {
        $this->tax = new SwedenValueAddedTax();
        $this->currency = new Currency('SEK');
    }

    /**
     * @return SwedenValueAddedTax
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
