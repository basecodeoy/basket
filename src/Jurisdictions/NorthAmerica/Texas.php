<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\TexasValueAddedTax;

class Texas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TexasValueAddedTax
     */
    private $tax;

    /**
     * Texas constructor.
     */
    public function __construct()
    {
        $this->tax      = new TexasValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return TexasValueAddedTax
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
