<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Transformers;

use PreemStudio\Basket\Order;

final class JSONTransformer extends AbstractTransformer
{
    /**
     * @return mixed
     */
    public function transform(Order $order): string
    {
        return json_encode($this->build($order));
    }
}
