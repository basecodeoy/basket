<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\MississippiValueAddedTax;

final class Mississippi implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MississippiValueAddedTax
     */
    private $tax;

    /**
     * Mississippi constructor.
     */
    public function __construct()
    {
        $this->tax = new MississippiValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MississippiValueAddedTax
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
