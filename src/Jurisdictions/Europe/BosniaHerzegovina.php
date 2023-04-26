<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\BosniaHerzegovinaValueAddedTax;
use Money\Currency;

final class BosniaHerzegovina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BosniaHerzegovinaValueAddedTax
     */
    private $tax;

    /**
     * BosniaHerzegovina constructor.
     */
    public function __construct()
    {
        $this->tax = new BosniaHerzegovinaValueAddedTax();
        $this->currency = new Currency('BAM');
    }

    /**
     * @return BosniaHerzegovinaValueAddedTax
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
