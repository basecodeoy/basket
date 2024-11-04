<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\TennesseeValueAddedTax;
use Money\Currency;

final class Tennessee implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TennesseeValueAddedTax
     */
    private $tax;

    /**
     * Tennessee constructor.
     */
    public function __construct()
    {
        $this->tax = new TennesseeValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return TennesseeValueAddedTax
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
