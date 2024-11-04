<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Transformers;

use BaseCodeOy\Basket\Order;
use Symfony\Component\Yaml\Dumper;

final class YAMLInlineTransformer extends AbstractTransformer
{
    public function transform(Order $order): string
    {
        return (new Dumper())->dump($this->build($order), true);
    }
}
