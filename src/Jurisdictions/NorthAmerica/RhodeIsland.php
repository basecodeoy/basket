<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\RhodeIslandValueAddedTax;
use Money\Currency;

final class RhodeIsland implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RhodeIslandValueAddedTax
     */
    private $tax;

    /**
     * RhodeIsland constructor.
     */
    public function __construct()
    {
        $this->tax = new RhodeIslandValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return RhodeIslandValueAddedTax
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
