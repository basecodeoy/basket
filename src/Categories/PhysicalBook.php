<?php

declare(strict_types=1);

namespace BaseCodeOy\Basket\Categories;

use BaseCodeOy\Basket\Contracts\Category;
use BaseCodeOy\Basket\Product;

final class PhysicalBook implements Category
{
    public function categorise(Product $product): void
    {
        $product->taxable(false);
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'Physical Book';
    }
}
