<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\CyprusValueAddedTax;
use Money\Currency;

final class Cyprus implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CyprusValueAddedTax
     */
    private $tax;

    /**
     * Cyprus constructor.
     */
    public function __construct()
    {
        $this->tax = new CyprusValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return CyprusValueAddedTax
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
