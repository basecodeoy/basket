<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\CroatiaValueAddedTax;
use Money\Currency;

final class Croatia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CroatiaValueAddedTax
     */
    private $tax;

    /**
     * Croatia constructor.
     */
    public function __construct()
    {
        $this->tax = new CroatiaValueAddedTax();
        $this->currency = new Currency('HRK');
    }

    /**
     * @return CroatiaValueAddedTax
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
