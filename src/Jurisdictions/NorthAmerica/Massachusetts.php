<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\MassachusettsValueAddedTax;
use Money\Currency;

final class Massachusetts implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MassachusettsValueAddedTax
     */
    private $tax;

    /**
     * Massachusetts constructor.
     */
    public function __construct()
    {
        $this->tax = new MassachusettsValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MassachusettsValueAddedTax
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
