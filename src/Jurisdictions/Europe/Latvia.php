<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\LatviaValueAddedTax;

final class Latvia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var LatviaValueAddedTax
     */
    private $tax;

    /**
     * Latvia constructor.
     */
    public function __construct()
    {
        $this->tax = new LatviaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return LatviaValueAddedTax
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
