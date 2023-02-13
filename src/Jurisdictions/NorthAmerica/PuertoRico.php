<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\PuertoRicoValueAddedTax;

class PuertoRico implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PuertoRicoValueAddedTax
     */
    private $tax;

    /**
     * PuertoRico constructor.
     */
    public function __construct()
    {
        $this->tax      = new PuertoRicoValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return PuertoRicoValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
