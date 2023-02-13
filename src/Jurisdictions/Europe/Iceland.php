<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\IcelandValueAddedTax;

class Iceland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IcelandValueAddedTax
     */
    private $tax;

    /**
     * Iceland constructor.
     */
    public function __construct()
    {
        $this->tax      = new IcelandValueAddedTax;
        $this->currency = new Currency('ISK');
    }

    /**
     * @return IcelandValueAddedTax
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
