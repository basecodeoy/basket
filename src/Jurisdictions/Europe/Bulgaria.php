<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\BulgariaValueAddedTax;

class Bulgaria implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BulgariaValueAddedTax
     */
    private $tax;

    /**
     * Bulgaria constructor.
     */
    public function __construct()
    {
        $this->tax      = new BulgariaValueAddedTax;
        $this->currency = new Currency('BGN');
    }

    /**
     * @return BulgariaValueAddedTax
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
