<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\BulgariaValueAddedTax;
use Money\Currency;

final class Bulgaria implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BulgariaValueAddedTax
     */
    private $tax;

    /**
     * Bulgaria constructor.
     */
    public function __construct()
    {
        $this->tax = new BulgariaValueAddedTax();
        $this->currency = new Currency('BGN');
    }

    /**
     * @return BulgariaValueAddedTax
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
