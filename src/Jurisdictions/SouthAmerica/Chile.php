<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\SouthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\SouthAmerica\ChileValueAddedTax;
use Money\Currency;

final class Chile implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ChileValueAddedTax
     */
    private $tax;

    /**
     * Chile constructor.
     */
    public function __construct()
    {
        $this->tax = new ChileValueAddedTax();
        $this->currency = new Currency('CLP');
    }

    /**
     * @return ChileValueAddedTax
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
