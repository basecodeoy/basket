<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\BrazilValueAddedTax;

class Brazil implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BrazilValueAddedTax
     */
    private $tax;

    /**
     * Brazil constructor.
     */
    public function __construct()
    {
        $this->tax = new BrazilValueAddedTax;
        $this->currency = new Currency('BRL');
    }

    /**
     * @return BrazilValueAddedTax
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
