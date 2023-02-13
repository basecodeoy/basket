<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

use PreemStudio\Basket\Product;

interface Discount
{
    /**
     * @param  Product  $product
     * @return mixed
     */
    public function product(Product $product);

    /**
     * @return mixed
     */
    public function rate();
}
