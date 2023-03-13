<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\LithuaniaValueAddedTax;

class Lithuania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LithuaniaValueAddedTax
     */
    private $tax;

    /**
     * Lithuania constructor.
     */
    public function __construct()
    {
        $this->tax = new LithuaniaValueAddedTax;
        $this->currency = new Currency('EUR');
    }

    /**
     * @return LithuaniaValueAddedTax
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
