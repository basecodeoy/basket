<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

interface Money
{
    /**
     * @return mixed
     */
    public function toMoney();
}
