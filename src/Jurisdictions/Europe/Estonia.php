<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\EstoniaValueAddedTax;

final class Estonia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EstoniaValueAddedTax
     */
    private $tax;

    /**
     * Estonia constructor.
     */
    public function __construct()
    {
        $this->tax = new EstoniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return EstoniaValueAddedTax
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
