<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\IcelandValueAddedTax;
use Money\Currency;

final class Iceland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IcelandValueAddedTax
     */
    private $tax;

    /**
     * Iceland constructor.
     */
    public function __construct()
    {
        $this->tax = new IcelandValueAddedTax();
        $this->currency = new Currency('ISK');
    }

    /**
     * @return IcelandValueAddedTax
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
