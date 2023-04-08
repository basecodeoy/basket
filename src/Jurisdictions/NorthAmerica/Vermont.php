<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\VermontValueAddedTax;

final class Vermont implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var VermontValueAddedTax
     */
    private $tax;

    /**
     * Vermont constructor.
     */
    public function __construct()
    {
        $this->tax = new VermontValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return VermontValueAddedTax
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
