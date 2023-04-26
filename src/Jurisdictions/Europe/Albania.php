<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\AlbaniaValueAddedTax;

final class Albania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlbaniaValueAddedTax
     */
    private $tax;

    /**
     * Albania constructor.
     */
    public function __construct()
    {
        $this->tax = new AlbaniaValueAddedTax();
        $this->currency = new Currency('ALL');
    }

    /**
     * @return AlbaniaValueAddedTax
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
