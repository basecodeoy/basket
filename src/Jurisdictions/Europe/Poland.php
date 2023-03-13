<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\PolandValueAddedTax;

class Poland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PolandValueAddedTax
     */
    private $tax;

    /**
     * Poland constructor.
     */
    public function __construct()
    {
        $this->tax = new PolandValueAddedTax;
        $this->currency = new Currency('PLN');
    }

    /**
     * @return PolandValueAddedTax
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
