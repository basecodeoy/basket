<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\IdahoValueAddedTax;

final class Idaho implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IdahoValueAddedTax
     */
    private $tax;

    /**
     * Idaho constructor.
     */
    public function __construct()
    {
        $this->tax = new IdahoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IdahoValueAddedTax
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
