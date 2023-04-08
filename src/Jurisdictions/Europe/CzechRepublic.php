<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\CzechRepublicValueAddedTax;

final class CzechRepublic implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CzechRepublicValueAddedTax
     */
    private $tax;

    /**
     * CzechRepublic constructor.
     */
    public function __construct()
    {
        $this->tax = new CzechRepublicValueAddedTax();
        $this->currency = new Currency('CZK');
    }

    /**
     * @return CzechRepublicValueAddedTax
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
