<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\ArkansasValueAddedTax;
use Money\Currency;

final class Arkansas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ArkansasValueAddedTax
     */
    private $tax;

    /**
     * Arkansas constructor.
     */
    public function __construct()
    {
        $this->tax = new ArkansasValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ArkansasValueAddedTax
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
