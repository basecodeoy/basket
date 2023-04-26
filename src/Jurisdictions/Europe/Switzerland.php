<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\SwitzerlandValueAddedTax;

final class Switzerland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwitzerlandValueAddedTax
     */
    private $tax;

    /**
     * Switzerland constructor.
     */
    public function __construct()
    {
        $this->tax = new SwitzerlandValueAddedTax();
        $this->currency = new Currency('CHF');
    }

    /**
     * @return SwitzerlandValueAddedTax
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
