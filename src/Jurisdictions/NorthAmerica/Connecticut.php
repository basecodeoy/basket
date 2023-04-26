<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\ConnecticutValueAddedTax;
use Money\Currency;

final class Connecticut implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ConnecticutValueAddedTax
     */
    private $tax;

    /**
     * Connecticut constructor.
     */
    public function __construct()
    {
        $this->tax = new ConnecticutValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ConnecticutValueAddedTax
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
