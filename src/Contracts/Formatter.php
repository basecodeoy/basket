<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

interface Formatter
{
    /**
     * @param  mixed $value
     * @return mixed
     */
    public function format($value);
}
