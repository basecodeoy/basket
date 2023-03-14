<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\SwedenValueAddedTax;

final class Sweden implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SwedenValueAddedTax
     */
    private $tax;

    /**
     * Sweden constructor.
     */
    public function __construct()
    {
        $this->tax      = new SwedenValueAddedTax;
        $this->currency = new Currency('SEK');
    }

    /**
     * @return SwedenValueAddedTax
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
