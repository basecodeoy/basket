<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\PennsylvaniaValueAddedTax;

final class Pennsylvania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PennsylvaniaValueAddedTax
     */
    private $tax;

    /**
     * Pennsylvania constructor.
     */
    public function __construct()
    {
        $this->tax      = new PennsylvaniaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return PennsylvaniaValueAddedTax
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
