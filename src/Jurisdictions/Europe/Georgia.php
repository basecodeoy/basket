<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\GeorgiaValueAddedTax;

final class Georgia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var GeorgiaValueAddedTax
     */
    private $tax;

    /**
     * Georgia constructor.
     */
    public function __construct()
    {
        $this->tax = new GeorgiaValueAddedTax();
        $this->currency = new Currency('GEL');
    }

    /**
     * @return GeorgiaValueAddedTax
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
