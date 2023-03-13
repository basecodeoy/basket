<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\WisconsinValueAddedTax;

class Wisconsin implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WisconsinValueAddedTax
     */
    private $tax;

    /**
     * Wisconsin constructor.
     */
    public function __construct()
    {
        $this->tax = new WisconsinValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return WisconsinValueAddedTax
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
