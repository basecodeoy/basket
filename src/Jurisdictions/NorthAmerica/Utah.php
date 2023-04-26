<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\UtahValueAddedTax;
use Money\Currency;

final class Utah implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UtahValueAddedTax
     */
    private $tax;

    /**
     * Utah constructor.
     */
    public function __construct()
    {
        $this->tax = new UtahValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return UtahValueAddedTax
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
