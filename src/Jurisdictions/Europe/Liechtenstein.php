<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\LiechtensteinValueAddedTax;
use Money\Currency;

final class Liechtenstein implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LiechtensteinValueAddedTax
     */
    private $tax;

    /**
     * Liechtenstein constructor.
     */
    public function __construct()
    {
        $this->tax = new LiechtensteinValueAddedTax();
        $this->currency = new Currency('CHF');
    }

    /**
     * @return LiechtensteinValueAddedTax
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
