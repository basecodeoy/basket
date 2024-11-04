<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Contracts;

use BaseCodeOy\Basket\Basket;

interface MetaData
{
    /**
     * @return mixed
     */
    public function generate(Basket $basket);

    /**
     * @return mixed
     */
    public function name();
}
