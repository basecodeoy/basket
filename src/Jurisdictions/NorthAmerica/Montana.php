<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\MontanaValueAddedTax;

class Montana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MontanaValueAddedTax
     */
    private $tax;

    /**
     * Montana constructor.
     */
    public function __construct()
    {
        $this->tax = new MontanaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return MontanaValueAddedTax
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
