<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Jurisdictions\Europe;

use Money\Currency;
use PreemStudio\Basket\Contracts\Jurisdiction;
use PreemStudio\Basket\Contracts\TaxRate;
use PreemStudio\Basket\TaxRates\Europe\BosniaHerzegovinaValueAddedTax;

final class BosniaHerzegovina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BosniaHerzegovinaValueAddedTax
     */
    private $tax;

    /**
     * BosniaHerzegovina constructor.
     */
    public function __construct()
    {
        $this->tax = new BosniaHerzegovinaValueAddedTax();
        $this->currency = new Currency('BAM');
    }

    /**
     * @return BosniaHerzegovinaValueAddedTax
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
