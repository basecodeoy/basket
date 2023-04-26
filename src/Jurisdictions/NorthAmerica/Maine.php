<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\MaineValueAddedTax;
use Money\Currency;

final class Maine implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MaineValueAddedTax
     */
    private $tax;

    /**
     * Maine constructor.
     */
    public function __construct()
    {
        $this->tax = new MaineValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MaineValueAddedTax
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
