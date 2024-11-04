<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\FinlandValueAddedTax;
use Money\Currency;

final class Finland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FinlandValueAddedTax
     */
    private $tax;

    /**
     * Finland constructor.
     */
    public function __construct()
    {
        $this->tax = new FinlandValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return FinlandValueAddedTax
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
