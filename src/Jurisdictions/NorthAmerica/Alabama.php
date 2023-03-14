<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\AlabamaValueAddedTax;

final class Alabama implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlabamaValueAddedTax
     */
    private $tax;

    /**
     * Alabama constructor.
     */
    public function __construct()
    {
        $this->tax      = new AlabamaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlabamaValueAddedTax
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
