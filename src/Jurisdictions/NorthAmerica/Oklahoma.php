<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\OklahomaValueAddedTax;
use Money\Currency;

final class Oklahoma implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OklahomaValueAddedTax
     */
    private $tax;

    /**
     * Oklahoma constructor.
     */
    public function __construct()
    {
        $this->tax = new OklahomaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return OklahomaValueAddedTax
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
