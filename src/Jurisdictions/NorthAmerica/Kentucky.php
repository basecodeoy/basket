<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\KentuckyValueAddedTax;

final class Kentucky implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var KentuckyValueAddedTax
     */
    private $tax;

    /**
     * Kentucky constructor.
     */
    public function __construct()
    {
        $this->tax      = new KentuckyValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return KentuckyValueAddedTax
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
