<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\MontanaValueAddedTax;
use Money\Currency;

final class Montana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MontanaValueAddedTax
     */
    private $tax;

    /**
     * Montana constructor.
     */
    public function __construct()
    {
        $this->tax = new MontanaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MontanaValueAddedTax
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
