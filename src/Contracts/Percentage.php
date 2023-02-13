<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

interface Percentage
{
    /**
     * @return mixed
     */
    public function toPercent();
}
