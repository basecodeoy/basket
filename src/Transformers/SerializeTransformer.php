<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Transformers;

use PreemStudio\Basket\Order;

final class SerializeTransformer extends AbstractTransformer
{
    public function transform(Order $order): string
    {
        return \serialize($this->build($order));
    }
}
