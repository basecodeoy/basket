<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\MissouriValueAddedTax;
use Money\Currency;

final class Missouri implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MissouriValueAddedTax
     */
    private $tax;

    /**
     * Missouri constructor.
     */
    public function __construct()
    {
        $this->tax = new MissouriValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MissouriValueAddedTax
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
