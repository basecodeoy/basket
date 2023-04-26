<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\MississippiValueAddedTax;

final class Mississippi implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MississippiValueAddedTax
     */
    private $tax;

    /**
     * Mississippi constructor.
     */
    public function __construct()
    {
        $this->tax = new MississippiValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MississippiValueAddedTax
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
