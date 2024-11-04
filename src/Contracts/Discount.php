<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Contracts;

use BaseCodeOy\Basket\Product;

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
