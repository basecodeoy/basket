<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\MissouriValueAddedTax;

final class Missouri implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MissouriValueAddedTax
     */
    private $tax;

    /**
     * Missouri constructor.
     */
    public function __construct()
    {
        $this->tax = new MissouriValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MissouriValueAddedTax
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
