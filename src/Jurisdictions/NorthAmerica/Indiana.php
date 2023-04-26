<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\IndianaValueAddedTax;

final class Indiana implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IndianaValueAddedTax
     */
    private $tax;

    /**
     * Indiana constructor.
     */
    public function __construct()
    {
        $this->tax = new IndianaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IndianaValueAddedTax
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
