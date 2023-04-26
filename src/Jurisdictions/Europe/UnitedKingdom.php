<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\UnitedKingdomValueAddedTax;

final class UnitedKingdom implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var UnitedKingdomValueAddedTax
     */
    private $tax;

    /**
     * UnitedKingdom constructor.
     */
    public function __construct()
    {
        $this->tax = new UnitedKingdomValueAddedTax();
        $this->currency = new Currency('GBP');
    }

    /**
     * @return UnitedKingdomValueAddedTax
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
