<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket;

final class Percent
{
    private $value;

    /**
     * Percent constructor.
     *
     * @param mixed $value
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
