<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Australia;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\AustraliaValueAddedTax;
use Money\Currency;

final class Australia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AustraliaValueAddedTax
     */
    private $tax;

    /**
     * Australia constructor.
     */
    public function __construct()
    {
        $this->tax = new AustraliaValueAddedTax();
        $this->currency = new Currency('AUD');
    }

    /**
     * @return AustraliaValueAddedTax
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
