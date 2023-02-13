<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\CyprusValueAddedTax;

class Cyprus implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CyprusValueAddedTax
     */
    private $tax;

    /**
     * Cyprus constructor.
     */
    public function __construct()
    {
        $this->tax      = new CyprusValueAddedTax;
        $this->currency = new Currency('EUR');
    }

    /**
     * @return CyprusValueAddedTax
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
