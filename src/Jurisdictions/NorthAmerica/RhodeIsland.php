<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\RhodeIslandValueAddedTax;

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
