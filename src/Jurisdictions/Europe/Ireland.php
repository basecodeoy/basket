<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\IrelandValueAddedTax;

final class Ireland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IrelandValueAddedTax
     */
    private $tax;

    /**
     * Ireland constructor.
     */
    public function __construct()
    {
        $this->tax = new IrelandValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return IrelandValueAddedTax
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
