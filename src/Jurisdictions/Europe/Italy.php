<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\ItalyValueAddedTax;

final class Italy implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ItalyValueAddedTax
     */
    private $tax;

    /**
     * Italy constructor.
     */
    public function __construct()
    {
        $this->tax = new ItalyValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return ItalyValueAddedTax
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
