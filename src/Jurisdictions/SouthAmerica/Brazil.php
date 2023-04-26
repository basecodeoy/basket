<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\SouthAmerica\BrazilValueAddedTax;

final class Brazil implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BrazilValueAddedTax
     */
    private $tax;

    /**
     * Brazil constructor.
     */
    public function __construct()
    {
        $this->tax = new BrazilValueAddedTax();
        $this->currency = new Currency('BRL');
    }

    /**
     * @return BrazilValueAddedTax
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
