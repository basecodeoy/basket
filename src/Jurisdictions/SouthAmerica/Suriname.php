<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\SurinameValueAddedTax;

final class Suriname implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SurinameValueAddedTax
     */
    private $tax;

    /**
     * Suriname constructor.
     */
    public function __construct()
    {
        $this->tax = new SurinameValueAddedTax();
        $this->currency = new Currency('SRD');
    }

    /**
     * @return SurinameValueAddedTax
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
