<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Contracts;

interface Money
{
    /**
     * @return mixed
     */
    public function toMoney();
}
