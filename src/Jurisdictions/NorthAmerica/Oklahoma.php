<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\OklahomaValueAddedTax;

final class Oklahoma implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var OklahomaValueAddedTax
     */
    private $tax;

    /**
     * Oklahoma constructor.
     */
    public function __construct()
    {
        $this->tax = new OklahomaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return OklahomaValueAddedTax
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
