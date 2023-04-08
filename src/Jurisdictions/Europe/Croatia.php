<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\CroatiaValueAddedTax;

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
