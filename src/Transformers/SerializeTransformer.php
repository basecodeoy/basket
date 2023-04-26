<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Transformers;

use BombenProdukt\Basket\Order;

final class SerializeTransformer extends AbstractTransformer
{
    public function transform(Order $order): string
    {
        return \serialize($this->build($order));
    }
}
