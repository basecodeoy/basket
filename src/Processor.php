<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket;

use BaseCodeOy\Basket\Contracts\Reconciler;

final class Processor
{
    /**
     * @var Reconciler
     */
    private $reconciler;

    /**
     * @var array
     */
    private $metadata;

    /**
     * Processor constructor.
     *
     * @param array $metadata
     */
    public function __construct(Reconciler $reconciler, $metadata = [])
    {
        $this->reconciler = $reconciler;
        $this->metadata = $metadata;
    }

    /**
     * @return Order
     */
    public function process(Basket $basket)
    {
        $meta = $this->meta($basket);
        $products = $this->products($basket);
        $delivery = $basket->delivery;

        return new Order($meta, $products, $delivery);
    }

    /**
     * @return array
     */
    public function meta(Basket $basket)
    {
        $meta = [];

        foreach ($this->metadata as $item) {
            $meta[$item->name()] = $item->generate($basket);
        }

        return $meta;
    }

    /**
     * @return array
     */
    public function products(Basket $basket)
    {
        $products = [];

        foreach ($basket->products() as $product) {
            $products[] = [
                'sku' => $product->sku,
                'name' => $product->name,
                'price' => $product->price,
                'rate' => $product->rate,
                'quantity' => $product->quantity,
                'freebie' => $product->freebie,
                'taxable' => $product->taxable,
                'delivery' => $product->delivery,
                'coupons' => $product->coupons,
                'tags' => $product->tags,
                'discounts' => $product->discounts,
                'attributes' => $product->attributes,
                'category' => $product->category,
                'total_value' => $this->reconciler->value($product),
                'total_discount' => $this->reconciler->discount($product),
                'total_delivery' => $this->reconciler->delivery($product),
                'total_tax' => $this->reconciler->tax($product),
                'subtotal' => $this->reconciler->subtotal($product),
                'total' => $this->reconciler->total($product),
            ];
        }

        return $products;
    }
}
