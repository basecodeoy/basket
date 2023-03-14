<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\AlaskaValueAddedTax;

final class Alaska implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlaskaValueAddedTax
     */
    private $tax;

    /**
     * Alaska constructor.
     */
    public function __construct()
    {
        $this->tax      = new AlaskaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlaskaValueAddedTax
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
