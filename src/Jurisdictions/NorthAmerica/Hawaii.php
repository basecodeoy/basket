<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\HawaiiValueAddedTax;
use Money\Currency;

final class Hawaii implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var HawaiiValueAddedTax
     */
    private $tax;

    /**
     * Hawaii constructor.
     */
    public function __construct()
    {
        $this->tax = new HawaiiValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return HawaiiValueAddedTax
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
