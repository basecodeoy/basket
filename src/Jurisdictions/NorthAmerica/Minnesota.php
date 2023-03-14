<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\MinnesotaValueAddedTax;

final class Minnesota implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MinnesotaValueAddedTax
     */
    private $tax;

    /**
     * Minnesota constructor.
     */
    public function __construct()
    {
        $this->tax      = new MinnesotaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return MinnesotaValueAddedTax
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
