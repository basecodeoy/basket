<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

use PreemStudio\Basket\Product;

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
