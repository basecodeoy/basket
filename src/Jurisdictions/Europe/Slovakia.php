<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\SlovakiaValueAddedTax;

class Slovakia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SlovakiaValueAddedTax
     */
    private $tax;

    /**
     * Slovakia constructor.
     */
    public function __construct()
    {
        $this->tax      = new SlovakiaValueAddedTax;
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SlovakiaValueAddedTax
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
