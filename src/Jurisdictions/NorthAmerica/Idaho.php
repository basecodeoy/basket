<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\IdahoValueAddedTax;
use Money\Currency;

final class Idaho implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IdahoValueAddedTax
     */
    private $tax;

    /**
     * Idaho constructor.
     */
    public function __construct()
    {
        $this->tax = new IdahoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IdahoValueAddedTax
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
