<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\NorthCarolinaValueAddedTax;

final class NorthCarolina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NorthCarolinaValueAddedTax
     */
    private $tax;

    /**
     * NorthCarolina constructor.
     */
    public function __construct()
    {
        $this->tax = new NorthCarolinaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NorthCarolinaValueAddedTax
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
