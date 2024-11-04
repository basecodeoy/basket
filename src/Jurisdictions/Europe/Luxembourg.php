<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\LuxembourgValueAddedTax;
use Money\Currency;

final class Luxembourg implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LuxembourgValueAddedTax
     */
    private $tax;

    /**
     * Luxembourg constructor.
     */
    public function __construct()
    {
        $this->tax = new LuxembourgValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return LuxembourgValueAddedTax
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
