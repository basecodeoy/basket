<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\TaxRates\TaxFreeValueAddedTax;
use Money\Currency;

final class TaxFree implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TaxFreeValueAddedTax
     */
    private $tax;

    /**
     * UnitedKingdom constructor.
     */
    public function __construct()
    {
        $this->tax = new TaxFreeValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return TaxFreeValueAddedTax
     */
    public function rate()
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency()
    {
        return $this->currency;
    }
}
