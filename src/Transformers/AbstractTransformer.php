<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Transformers;

use PreemStudio\Basket\Contracts\Transformer;
use PreemStudio\Basket\Converter;
use PreemStudio\Basket\Order;

abstract class AbstractTransformer implements Transformer
{
    /**
     * @var Converter
     */
    private $converter;

    /**
     * AbstractTransformer constructor.
     */
    public function __construct(Converter $converter)
    {
        $this->converter = $converter;
    }

    /**
     * @return mixed
     */
    public function build(Order $order)
    {
        foreach ($order->meta() as $key => $total) {
            $payload[$key] = $this->converter->convert($total);
        }

        $payload['products'] = [];

        foreach ($order->products() as $product) {
            $payload['products'][] = \array_map(function ($value) {
                return $this->converter->convert($value);
            }, $product);
        }

        return $payload;
    }
}
