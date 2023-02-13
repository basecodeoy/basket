<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\NewJerseyValueAddedTax;

class NewJersey implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewJerseyValueAddedTax
     */
    private $tax;

    /**
     * NewJersey constructor.
     */
    public function __construct()
    {
        $this->tax      = new NewJerseyValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewJerseyValueAddedTax
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
