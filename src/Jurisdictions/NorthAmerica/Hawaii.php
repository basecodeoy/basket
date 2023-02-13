<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\HawaiiValueAddedTax;

class Hawaii implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var HawaiiValueAddedTax
     */
    private $tax;

    /**
     * Hawaii constructor.
     */
    public function __construct()
    {
        $this->tax      = new HawaiiValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return HawaiiValueAddedTax
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
