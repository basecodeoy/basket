<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Transformers;

use BaseCodeOy\Basket\Order;

final class SerializeTransformer extends AbstractTransformer
{
    public function transform(Order $order): string
    {
        return \serialize($this->build($order));
    }
}
