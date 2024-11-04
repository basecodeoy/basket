<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Contracts;

interface TaxRate
{
    /**
     * @return mixed
     */
    public function float();

    /**
     * @return mixed
     */
    public function percentage();
}
