<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Transformers;

use BaseCodeOy\Basket\Order;

final class ArrayTransformer extends AbstractTransformer
{
    /**
     * @return mixed
     */
    public function transform(Order $order)
    {
        return $this->build($order);
    }
}
