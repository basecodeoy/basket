<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\AlaskaValueAddedTax;
use Money\Currency;

final class Alaska implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlaskaValueAddedTax
     */
    private $tax;

    /**
     * Alaska constructor.
     */
    public function __construct()
    {
        $this->tax = new AlaskaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlaskaValueAddedTax
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
