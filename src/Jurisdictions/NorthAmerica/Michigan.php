<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\NorthAmerica;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\NorthAmerica\MichiganValueAddedTax;

final class Michigan implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MichiganValueAddedTax
     */
    private $tax;

    /**
     * Michigan constructor.
     */
    public function __construct()
    {
        $this->tax = new MichiganValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return MichiganValueAddedTax
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
