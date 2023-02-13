<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\FinlandValueAddedTax;

class Finland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FinlandValueAddedTax
     */
    private $tax;

    /**
     * Finland constructor.
     */
    public function __construct()
    {
        $this->tax      = new FinlandValueAddedTax;
        $this->currency = new Currency('EUR');
    }

    /**
     * @return FinlandValueAddedTax
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
