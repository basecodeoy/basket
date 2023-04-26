<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Contracts;

interface Formatter
{
    /**
     * @param  mixed $value
     * @return mixed
     */
    public function format($value);
}
