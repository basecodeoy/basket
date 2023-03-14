<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\BoliviaValueAddedTax;

final class Bolivia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BoliviaValueAddedTax
     */
    private $tax;

    /**
     * Bolivia constructor.
     */
    public function __construct()
    {
        $this->tax      = new BoliviaValueAddedTax;
        $this->currency = new Currency('BOB');
    }

    /**
     * @return BoliviaValueAddedTax
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
