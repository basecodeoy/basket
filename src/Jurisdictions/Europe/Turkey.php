<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\TurkeyValueAddedTax;

class Turkey implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TurkeyValueAddedTax
     */
    private $tax;

    /**
     * Turkey constructor.
     */
    public function __construct()
    {
        $this->tax      = new TurkeyValueAddedTax;
        $this->currency = new Currency('TRY');
    }

    /**
     * @return TurkeyValueAddedTax
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
