<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\IndianaValueAddedTax;

class Indiana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IndianaValueAddedTax
     */
    private $tax;

    /**
     * Indiana constructor.
     */
    public function __construct()
    {
        $this->tax      = new IndianaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return IndianaValueAddedTax
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
