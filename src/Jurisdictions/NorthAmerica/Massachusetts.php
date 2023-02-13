<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\MassachusettsValueAddedTax;

class Massachusetts implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MassachusettsValueAddedTax
     */
    private $tax;

    /**
     * Massachusetts constructor.
     */
    public function __construct()
    {
        $this->tax      = new MassachusettsValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return MassachusettsValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
