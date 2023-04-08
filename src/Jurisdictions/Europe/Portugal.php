<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\PortugalValueAddedTax;

final class Portugal implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PortugalValueAddedTax
     */
    private $tax;

    /**
     * Portugal constructor.
     */
    public function __construct()
    {
        $this->tax = new PortugalValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return PortugalValueAddedTax
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
