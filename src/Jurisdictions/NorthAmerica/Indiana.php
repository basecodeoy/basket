<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\IndianaValueAddedTax;
use Money\Currency;

final class Indiana implements Jurisdiction
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
        $this->tax = new IndianaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IndianaValueAddedTax
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
