<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\GermanyValueAddedTax;

class Germany implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GermanyValueAddedTax
     */
    private $tax;

    /**
     * Germany constructor.
     */
    public function __construct()
    {
        $this->tax      = new GermanyValueAddedTax;
        $this->currency = new Currency('EUR');
    }

    /**
     * @return GermanyValueAddedTax
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
