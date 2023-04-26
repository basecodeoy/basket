<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\FloridaValueAddedTax;
use Money\Currency;

final class Florida implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FloridaValueAddedTax
     */
    private $tax;

    /**
     * Florida constructor.
     */
    public function __construct()
    {
        $this->tax = new FloridaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return FloridaValueAddedTax
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
