<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Australia;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\AustraliaValueAddedTax;

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
        $this->tax      = new AustraliaValueAddedTax;
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
