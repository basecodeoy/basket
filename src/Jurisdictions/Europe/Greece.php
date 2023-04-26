<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\GreeceValueAddedTax;

final class Greece implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GreeceValueAddedTax
     */
    private $tax;

    /**
     * Greece constructor.
     */
    public function __construct()
    {
        $this->tax = new GreeceValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return GreeceValueAddedTax
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
