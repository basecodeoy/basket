<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\NewJerseyValueAddedTax;

final class NewJersey implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NewJerseyValueAddedTax
     */
    private $tax;

    /**
     * NewJersey constructor.
     */
    public function __construct()
    {
        $this->tax = new NewJerseyValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NewJerseyValueAddedTax
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
