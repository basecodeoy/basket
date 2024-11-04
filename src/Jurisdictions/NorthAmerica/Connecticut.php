<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\ConnecticutValueAddedTax;
use Money\Currency;

final class Connecticut implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ConnecticutValueAddedTax
     */
    private $tax;

    /**
     * Connecticut constructor.
     */
    public function __construct()
    {
        $this->tax = new ConnecticutValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ConnecticutValueAddedTax
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
