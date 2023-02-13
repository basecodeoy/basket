<?php

declare(strict_types=1);

namespace PreemStudio\Basket\Contracts;

use PreemStudio\Basket\Product;

interface Category
{
    /**
     * @param  Product  $product
     * @return mixed
     */
    public function categorise(Product $product);

    /**
     * @return mixed
     */
    public function name();
}
