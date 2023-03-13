<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\WestVirginiaValueAddedTax;

class WestVirginia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WestVirginiaValueAddedTax
     */
    private $tax;

    /**
     * WestVirginia constructor.
     */
    public function __construct()
    {
        $this->tax = new WestVirginiaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return WestVirginiaValueAddedTax
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
