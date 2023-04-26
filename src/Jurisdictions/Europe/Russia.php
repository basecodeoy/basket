<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\RussiaValueAddedTax;
use Money\Currency;

final class Russia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RussiaValueAddedTax
     */
    private $tax;

    /**
     * Russia constructor.
     */
    public function __construct()
    {
        $this->tax = new RussiaValueAddedTax();
        $this->currency = new Currency('RUB');
    }

    /**
     * @return RussiaValueAddedTax
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
