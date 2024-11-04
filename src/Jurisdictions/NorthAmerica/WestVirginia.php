<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\WestVirginiaValueAddedTax;
use Money\Currency;

final class WestVirginia implements Jurisdiction
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
        $this->tax = new WestVirginiaValueAddedTax();
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
