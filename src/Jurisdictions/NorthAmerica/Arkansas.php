<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\ArkansasValueAddedTax;
use Money\Currency;

final class Arkansas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ArkansasValueAddedTax
     */
    private $tax;

    /**
     * Arkansas constructor.
     */
    public function __construct()
    {
        $this->tax = new ArkansasValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ArkansasValueAddedTax
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
