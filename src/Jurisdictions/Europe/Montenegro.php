<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\MontenegroValueAddedTax;

final class Montenegro implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MontenegroValueAddedTax
     */
    private $tax;

    /**
     * Montenegro constructor.
     */
    public function __construct()
    {
        $this->tax = new MontenegroValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return MontenegroValueAddedTax
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
