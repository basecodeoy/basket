<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use Money\Currency;
use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\MacedoniaValueAddedTax;

final class Macedonia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MacedoniaValueAddedTax
     */
    private $tax;

    /**
     * Macedonia constructor.
     */
    public function __construct()
    {
        $this->tax = new MacedoniaValueAddedTax();
        $this->currency = new Currency('MKD');
    }

    /**
     * @return MacedoniaValueAddedTax
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
