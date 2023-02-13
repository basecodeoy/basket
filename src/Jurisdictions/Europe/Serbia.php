<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\SerbiaValueAddedTax;

class Serbia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SerbiaValueAddedTax
     */
    private $tax;

    /**
     * Serbia constructor.
     */
    public function __construct()
    {
        $this->tax      = new SerbiaValueAddedTax;
        $this->currency = new Currency('RSD');
    }

    /**
     * @return SerbiaValueAddedTax
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
