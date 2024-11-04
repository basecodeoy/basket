<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\Europe;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\Europe\MacedoniaValueAddedTax;
use Money\Currency;

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
