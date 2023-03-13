<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\IrelandValueAddedTax;

class Ireland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IrelandValueAddedTax
     */
    private $tax;

    /**
     * Ireland constructor.
     */
    public function __construct()
    {
        $this->tax = new IrelandValueAddedTax;
        $this->currency = new Currency('EUR');
    }

    /**
     * @return IrelandValueAddedTax
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
