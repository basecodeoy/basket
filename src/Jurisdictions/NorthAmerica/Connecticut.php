<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\ConnecticutValueAddedTax;

final class Connecticut implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ConnecticutValueAddedTax
     */
    private $tax;

    /**
     * Connecticut constructor.
     */
    public function __construct()
    {
        $this->tax = new ConnecticutValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ConnecticutValueAddedTax
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
