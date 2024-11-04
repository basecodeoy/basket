<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\MaltaValueAddedTax;
use Money\Currency;

final class Malta implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MaltaValueAddedTax
     */
    private $tax;

    /**
     * Malta constructor.
     */
    public function __construct()
    {
        $this->tax = new MaltaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return MaltaValueAddedTax
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
