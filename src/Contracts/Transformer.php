<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Contracts;

use BaseCodeOy\Basket\Order;

interface Transformer
{
    /**
     * @return mixed
     */
    public function transform(Order $order);
}
