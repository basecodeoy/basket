<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Contracts;

interface Percentage
{
    /**
     * @return mixed
     */
    public function toPercent();
}
