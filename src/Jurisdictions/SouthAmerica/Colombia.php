<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\ColombiaValueAddedTax;

class Colombia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ColombiaValueAddedTax
     */
    private $tax;

    /**
     * Colombia constructor.
     */
    public function __construct()
    {
        $this->tax = new ColombiaValueAddedTax;
        $this->currency = new Currency('COP');
    }

    /**
     * @return ColombiaValueAddedTax
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
