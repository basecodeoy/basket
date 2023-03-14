<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\FloridaValueAddedTax;

final class Florida implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FloridaValueAddedTax
     */
    private $tax;

    /**
     * Florida constructor.
     */
    public function __construct()
    {
        $this->tax      = new FloridaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return FloridaValueAddedTax
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
