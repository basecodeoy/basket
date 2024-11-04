<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\AlbaniaValueAddedTax;
use Money\Currency;

final class Albania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlbaniaValueAddedTax
     */
    private $tax;

    /**
     * Albania constructor.
     */
    public function __construct()
    {
        $this->tax = new AlbaniaValueAddedTax();
        $this->currency = new Currency('ALL');
    }

    /**
     * @return AlbaniaValueAddedTax
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
