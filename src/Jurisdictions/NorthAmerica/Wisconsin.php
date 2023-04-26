<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\WisconsinValueAddedTax;
use Money\Currency;

final class Wisconsin implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WisconsinValueAddedTax
     */
    private $tax;

    /**
     * Wisconsin constructor.
     */
    public function __construct()
    {
        $this->tax = new WisconsinValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WisconsinValueAddedTax
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
