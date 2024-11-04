<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\UnitedKingdomValueAddedTax;
use Money\Currency;

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
