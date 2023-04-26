<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\SouthAmerica;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\SouthAmerica\ArgentinaValueAddedTax;

final class Argentina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ArgentinaValueAddedTax
     */
    private $tax;

    /**
     * Argentina constructor.
     */
    public function __construct()
    {
        $this->tax = new ArgentinaValueAddedTax();
        $this->currency = new Currency('ARS');
    }

    /**
     * @return ArgentinaValueAddedTax
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
