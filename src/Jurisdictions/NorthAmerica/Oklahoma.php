<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\OklahomaValueAddedTax;

final class Oklahoma implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OklahomaValueAddedTax
     */
    private $tax;

    /**
     * Oklahoma constructor.
     */
    public function __construct()
    {
        $this->tax      = new OklahomaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return OklahomaValueAddedTax
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
