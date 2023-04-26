<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\WestVirginiaValueAddedTax;

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
