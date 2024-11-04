<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\MetaData;

use BaseCodeOy\Basket\Basket;
use BaseCodeOy\Basket\Contracts\MetaData;

final class ProductsMetaData implements MetaData
{
    /**
     * @return int
     */
    public function generate(Basket $basket)
    {
        $total = 0;

        foreach ($basket->products() as $product) {
            $total = $total + $product->quantity;
        }

        return $total;
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'products_count';
    }
}
