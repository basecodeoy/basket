<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\IcelandValueAddedTax;

final class Iceland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IcelandValueAddedTax
     */
    private $tax;

    /**
     * Iceland constructor.
     */
    public function __construct()
    {
        $this->tax = new IcelandValueAddedTax();
        $this->currency = new Currency('ISK');
    }

    /**
     * @return IcelandValueAddedTax
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
