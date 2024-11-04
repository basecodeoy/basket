<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\IrelandValueAddedTax;
use Money\Currency;

final class Ireland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IrelandValueAddedTax
     */
    private $tax;

    /**
     * Ireland constructor.
     */
    public function __construct()
    {
        $this->tax = new IrelandValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return IrelandValueAddedTax
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
