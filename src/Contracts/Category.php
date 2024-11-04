<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Contracts;

use BaseCodeOy\Basket\Product;

interface Category
{
    /**
     * @return mixed
     */
    public function categorise(Product $product);

    /**
     * @return mixed
     */
    public function name();
}
