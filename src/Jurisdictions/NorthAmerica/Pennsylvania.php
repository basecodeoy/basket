<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\PennsylvaniaValueAddedTax;
use Money\Currency;

final class Pennsylvania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PennsylvaniaValueAddedTax
     */
    private $tax;

    /**
     * Pennsylvania constructor.
     */
    public function __construct()
    {
        $this->tax = new PennsylvaniaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return PennsylvaniaValueAddedTax
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
