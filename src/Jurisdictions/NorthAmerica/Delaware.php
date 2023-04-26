<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\NorthAmerica;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\NorthAmerica\DelawareValueAddedTax;
use Money\Currency;

final class Delaware implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DelawareValueAddedTax
     */
    private $tax;

    /**
     * Delaware constructor.
     */
    public function __construct()
    {
        $this->tax = new DelawareValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return DelawareValueAddedTax
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
