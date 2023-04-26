<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\BelgiumValueAddedTax;
use Money\Currency;

final class Belgium implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BelgiumValueAddedTax
     */
    private $tax;

    /**
     * Belgium constructor.
     */
    public function __construct()
    {
        $this->tax = new BelgiumValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return BelgiumValueAddedTax
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
