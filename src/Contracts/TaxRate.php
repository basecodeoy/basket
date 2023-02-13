<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

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
