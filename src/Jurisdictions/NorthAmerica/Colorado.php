<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Jurisdictions\NorthAmerica;

use BaseCodeOy\Basket\Contracts\Jurisdiction;
use BaseCodeOy\Basket\Contracts\TaxRate;
use BaseCodeOy\Basket\TaxRates\NorthAmerica\ColoradoValueAddedTax;
use Money\Currency;

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
