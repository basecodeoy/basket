<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Transformers;

use PreemStudio\Basket\Order;

class SerializeTransformer extends AbstractTransformer
{
    /**
     * @param  Order  $order
     * @return string
     */
    public function transform(Order $order): string
    {
        return serialize($this->build($order));
    }
}
