<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Contracts;

use BombenProdukt\Basket\Basket;

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
