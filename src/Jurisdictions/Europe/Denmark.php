<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\DenmarkValueAddedTax;
use Money\Currency;

final class Denmark implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DenmarkValueAddedTax
     */
    private $tax;

    /**
     * Denmark constructor.
     */
    public function __construct()
    {
        $this->tax = new DenmarkValueAddedTax();
        $this->currency = new Currency('DKK');
    }

    /**
     * @return DenmarkValueAddedTax
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
