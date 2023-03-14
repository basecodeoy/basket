<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\NewMexicoValueAddedTax;

final class NewMexico implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewMexicoValueAddedTax
     */
    private $tax;

    /**
     * NewMexico constructor.
     */
    public function __construct()
    {
        $this->tax      = new NewMexicoValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewMexicoValueAddedTax
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
