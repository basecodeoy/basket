<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\UruguayValueAddedTax;

class Uruguay implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UruguayValueAddedTax
     */
    private $tax;

    /**
     * Uruguay constructor.
     */
    public function __construct()
    {
        $this->tax      = new UruguayValueAddedTax;
        $this->currency = new Currency('UYU');
    }

    /**
     * @return UruguayValueAddedTax
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
