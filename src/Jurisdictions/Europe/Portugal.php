<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\PortugalValueAddedTax;
use Money\Currency;

final class Portugal implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PortugalValueAddedTax
     */
    private $tax;

    /**
     * Portugal constructor.
     */
    public function __construct()
    {
        $this->tax = new PortugalValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return PortugalValueAddedTax
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
