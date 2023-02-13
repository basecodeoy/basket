<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\EstoniaValueAddedTax;

class Estonia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var EstoniaValueAddedTax
     */
    private $tax;

    /**
     * Estonia constructor.
     */
    public function __construct()
    {
        $this->tax      = new EstoniaValueAddedTax;
        $this->currency = new Currency('EUR');
    }

    /**
     * @return EstoniaValueAddedTax
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
