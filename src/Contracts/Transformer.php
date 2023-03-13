<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

use PreemStudio\Basket\Order;

interface Transformer
{
    /**
     * @return mixed
     */
    public function transform(Order $order);
}
