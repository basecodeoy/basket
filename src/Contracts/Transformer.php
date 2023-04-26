<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Contracts;

use BombenProdukt\Basket\Order;

interface Transformer
{
    /**
     * @return mixed
     */
    public function transform(Order $order);
}
