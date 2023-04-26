<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\IllinoisValueAddedTax;
use Money\Currency;

final class Illinois implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IllinoisValueAddedTax
     */
    private $tax;

    /**
     * Illinois constructor.
     */
    public function __construct()
    {
        $this->tax = new IllinoisValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IllinoisValueAddedTax
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
