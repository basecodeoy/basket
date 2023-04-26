<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\SlovakiaValueAddedTax;
use Money\Currency;

final class Slovakia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SlovakiaValueAddedTax
     */
    private $tax;

    /**
     * Slovakia constructor.
     */
    public function __construct()
    {
        $this->tax = new SlovakiaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SlovakiaValueAddedTax
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
