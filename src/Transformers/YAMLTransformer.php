<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Transformers;

use PreemStudio\Basket\Order;
use Symfony\Component\Yaml\Dumper;

final class YAMLTransformer extends AbstractTransformer
{
    public function transform(Order $order): string
    {
        return (new Dumper)->dump($this->build($order));
    }
}
