<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\SouthAmerica\ParaguayValueAddedTax;

final class Paraguay implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ParaguayValueAddedTax
     */
    private $tax;

    /**
     * Paraguay constructor.
     */
    public function __construct()
    {
        $this->tax = new ParaguayValueAddedTax();
        $this->currency = new Currency('PYG');
    }

    /**
     * @return ParaguayValueAddedTax
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
