<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\TexasValueAddedTax;

final class Texas implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var TexasValueAddedTax
     */
    private $tax;

    /**
     * Texas constructor.
     */
    public function __construct()
    {
        $this->tax = new TexasValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return TexasValueAddedTax
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
