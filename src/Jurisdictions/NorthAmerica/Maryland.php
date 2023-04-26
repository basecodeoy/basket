<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\MarylandValueAddedTax;
use Money\Currency;

final class Maryland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MarylandValueAddedTax
     */
    private $tax;

    /**
     * Maryland constructor.
     */
    public function __construct()
    {
        $this->tax = new MarylandValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MarylandValueAddedTax
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
