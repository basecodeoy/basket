<?php

declare(strict_types=1);

namespace PreemStudio\Basket;

class Percent
{
    private $value;

    /**
     * Percent constructor.
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function int()
    {
        return $this->value;
    }
}
