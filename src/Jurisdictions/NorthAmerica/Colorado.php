<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\ColoradoValueAddedTax;

final class Colorado implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ColoradoValueAddedTax
     */
    private $tax;

    /**
     * Colorado constructor.
     */
    public function __construct()
    {
        $this->tax = new ColoradoValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return ColoradoValueAddedTax
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
