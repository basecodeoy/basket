<?php

declare(strict_types=1);

namespace BombenProdukt\Basket\Contracts;

use BombenProdukt\Basket\Product;

interface Discount
{
    /**
     * @return mixed
     */
    public function product(Product $product);

    /**
     * @return mixed
     */
    public function rate();
}
