<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\LithuaniaValueAddedTax;

final class Lithuania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LithuaniaValueAddedTax
     */
    private $tax;

    /**
     * Lithuania constructor.
     */
    public function __construct()
    {
        $this->tax = new LithuaniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return LithuaniaValueAddedTax
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
