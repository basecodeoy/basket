<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\DistrictOfColumbiaValueAddedTax;

final class DistrictOfColumbia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var DistrictOfColumbiaValueAddedTax
     */
    private $tax;

    /**
     * DistrictOfColumbia constructor.
     */
    public function __construct()
    {
        $this->tax      = new DistrictOfColumbiaValueAddedTax;
        $this->currency = new Currency('USD');
    }

    /**
     * @return DistrictOfColumbiaValueAddedTax
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
