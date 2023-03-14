<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\GuyanaValueAddedTax;

final class Guyana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GuyanaValueAddedTax
     */
    private $tax;

    /**
     * Guyana constructor.
     */
    public function __construct()
    {
        $this->tax      = new GuyanaValueAddedTax;
        $this->currency = new Currency('GYD');
    }

    /**
     * @return GuyanaValueAddedTax
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
