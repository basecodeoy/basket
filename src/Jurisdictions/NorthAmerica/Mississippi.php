<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\MississippiValueAddedTax;
use Money\Currency;

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
