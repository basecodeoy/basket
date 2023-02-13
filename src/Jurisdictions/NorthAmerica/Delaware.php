<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\DelawareValueAddedTax;

class Delaware implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DelawareValueAddedTax
     */
    private $tax;

    /**
     * Delaware constructor.
     */
    public function __construct()
    {
        $this->tax      = new DelawareValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return DelawareValueAddedTax
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
