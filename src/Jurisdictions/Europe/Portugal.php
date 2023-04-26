<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\PortugalValueAddedTax;

final class Portugal implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PortugalValueAddedTax
     */
    private $tax;

    /**
     * Portugal constructor.
     */
    public function __construct()
    {
        $this->tax = new PortugalValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return PortugalValueAddedTax
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
