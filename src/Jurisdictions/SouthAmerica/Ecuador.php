<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\EcuadorValueAddedTax;

final class Ecuador implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EcuadorValueAddedTax
     */
    private $tax;

    /**
     * Ecuador constructor.
     */
    public function __construct()
    {
        $this->tax = new EcuadorValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return EcuadorValueAddedTax
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
