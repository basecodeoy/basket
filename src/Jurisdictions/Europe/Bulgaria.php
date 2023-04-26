<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Jurisdictions\Europe;

use BombenProdukt\Basket\Contracts\Jurisdiction;
use BombenProdukt\Basket\Contracts\TaxRate;
use BombenProdukt\Basket\TaxRates\Europe\BulgariaValueAddedTax;
use Money\Currency;

final class Bulgaria implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BulgariaValueAddedTax
     */
    private $tax;

    /**
     * Bulgaria constructor.
     */
    public function __construct()
    {
        $this->tax = new BulgariaValueAddedTax();
        $this->currency = new Currency('BGN');
    }

    /**
     * @return BulgariaValueAddedTax
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
