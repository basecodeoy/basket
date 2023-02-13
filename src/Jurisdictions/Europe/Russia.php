<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\RussiaValueAddedTax;

class Russia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RussiaValueAddedTax
     */
    private $tax;

    /**
     * Russia constructor.
     */
    public function __construct()
    {
        $this->tax      = new RussiaValueAddedTax;
        $this->currency = new Currency('RUB');
    }

    /**
     * @return RussiaValueAddedTax
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
