<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\CrotiaValueAddedTax;

class Croatia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CrotiaValueAddedTax
     */
    private $tax;

    /**
     * Croatia constructor.
     */
    public function __construct()
    {
        $this->tax      = new CrotiaValueAddedTax;
        $this->currency = new Currency('HRK');
    }

    /**
     * @return CrotiaValueAddedTax
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
