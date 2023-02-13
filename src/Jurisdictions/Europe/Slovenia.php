<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\SloveniaValueAddedTax;

class Slovenia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SloveniaValueAddedTax
     */
    private $tax;

    /**
     * Slovenia constructor.
     */
    public function __construct()
    {
        $this->tax      = new SloveniaValueAddedTax;
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SloveniaValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
