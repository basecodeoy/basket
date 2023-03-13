<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\MarylandValueAddedTax;

class Maryland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MarylandValueAddedTax
     */
    private $tax;

    /**
     * Maryland constructor.
     */
    public function __construct()
    {
        $this->tax = new MarylandValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return MarylandValueAddedTax
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
