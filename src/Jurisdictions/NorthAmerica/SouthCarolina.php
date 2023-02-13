<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\SouthCarolinaValueAddedTax;

class SouthCarolina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SouthCarolinaValueAddedTax
     */
    private $tax;

    /**
     * SouthCarolina constructor.
     */
    public function __construct()
    {
        $this->tax      = new SouthCarolinaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return SouthCarolinaValueAddedTax
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
