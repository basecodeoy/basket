<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\LiechtensteinValueAddedTax;

class Liechtenstein implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LiechtensteinValueAddedTax
     */
    private $tax;

    /**
     * Liechtenstein constructor.
     */
    public function __construct()
    {
        $this->tax      = new LiechtensteinValueAddedTax;
        $this->currency = new Currency('CHF');
    }

    /**
     * @return LiechtensteinValueAddedTax
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
