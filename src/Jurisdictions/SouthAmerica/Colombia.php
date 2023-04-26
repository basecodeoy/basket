<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\SouthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\SouthAmerica\ColombiaValueAddedTax;
use Money\Currency;

final class Colombia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ColombiaValueAddedTax
     */
    private $tax;

    /**
     * Colombia constructor.
     */
    public function __construct()
    {
        $this->tax = new ColombiaValueAddedTax();
        $this->currency = new Currency('COP');
    }

    /**
     * @return ColombiaValueAddedTax
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
