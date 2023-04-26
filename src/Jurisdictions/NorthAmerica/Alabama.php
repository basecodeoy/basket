<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\AlabamaValueAddedTax;

final class Alabama implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlabamaValueAddedTax
     */
    private $tax;

    /**
     * Alabama constructor.
     */
    public function __construct()
    {
        $this->tax = new AlabamaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return AlabamaValueAddedTax
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
