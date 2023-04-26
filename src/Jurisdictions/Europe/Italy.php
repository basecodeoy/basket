<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\ItalyValueAddedTax;
use Money\Currency;

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
