<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\CaliforniaValueAddedTax;

final class California implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CaliforniaValueAddedTax
     */
    private $tax;

    /**
     * California constructor.
     */
    public function __construct()
    {
        $this->tax      = new CaliforniaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return CaliforniaValueAddedTax
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
